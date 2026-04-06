<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property string|null $dataAccessRole
 * @property RedshiftCredentialConfiguration|null $redshiftCredentialConfiguration
 * @property RedshiftStorage $redshiftStorage
 * @property string|null $region
 * @property list<RelationalFilterConfiguration> $relationalFilterConfigurations
 */
class RedshiftRunConfigurationOutput extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     dataAccessRole?: string|null,
     *     redshiftCredentialConfiguration?: RedshiftCredentialConfiguration|null,
     *     redshiftStorage: RedshiftStorage,
     *     region?: string|null,
     *     relationalFilterConfigurations: list<RelationalFilterConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
