<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property string|null $region
 * @property string|null $dataAccessRole
 * @property list<RelationalFilterConfiguration> $relationalFilterConfigurations
 * @property RedshiftCredentialConfiguration|null $redshiftCredentialConfiguration
 * @property RedshiftStorage $redshiftStorage
 */
class RedshiftRunConfigurationOutput extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     region?: string|null,
     *     dataAccessRole?: string|null,
     *     relationalFilterConfigurations: list<RelationalFilterConfiguration>,
     *     redshiftCredentialConfiguration?: RedshiftCredentialConfiguration|null,
     *     redshiftStorage: RedshiftStorage
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
