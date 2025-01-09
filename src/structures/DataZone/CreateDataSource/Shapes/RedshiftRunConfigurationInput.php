<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dataAccessRole
 * @property RedshiftCredentialConfiguration $redshiftCredentialConfiguration
 * @property RedshiftStorage $redshiftStorage
 * @property list<RelationalFilterConfiguration> $relationalFilterConfigurations
 */
class RedshiftRunConfigurationInput extends Shape
{
    /**
     * @param array{
     *     dataAccessRole?: string,
     *     redshiftCredentialConfiguration?: RedshiftCredentialConfiguration,
     *     redshiftStorage?: RedshiftStorage,
     *     relationalFilterConfigurations: list<RelationalFilterConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
