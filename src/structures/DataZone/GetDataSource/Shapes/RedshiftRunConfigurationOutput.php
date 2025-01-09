<?php

namespace Sunaoka\Aws\Structures\DataZone\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string $dataAccessRole
 * @property RedshiftCredentialConfiguration $redshiftCredentialConfiguration
 * @property RedshiftStorage $redshiftStorage
 * @property string $region
 * @property list<RelationalFilterConfiguration> $relationalFilterConfigurations
 */
class RedshiftRunConfigurationOutput extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     dataAccessRole?: string,
     *     redshiftCredentialConfiguration?: RedshiftCredentialConfiguration,
     *     redshiftStorage: RedshiftStorage,
     *     region?: string,
     *     relationalFilterConfigurations: list<RelationalFilterConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
