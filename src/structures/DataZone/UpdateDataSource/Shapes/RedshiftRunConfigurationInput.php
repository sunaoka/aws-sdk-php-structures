<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $dataAccessRole
 * @property list<RelationalFilterConfiguration> $relationalFilterConfigurations
 * @property RedshiftCredentialConfiguration|null $redshiftCredentialConfiguration
 * @property RedshiftStorage|null $redshiftStorage
 */
class RedshiftRunConfigurationInput extends Shape
{
    /**
     * @param array{
     *     dataAccessRole?: string|null,
     *     relationalFilterConfigurations: list<RelationalFilterConfiguration>,
     *     redshiftCredentialConfiguration?: RedshiftCredentialConfiguration|null,
     *     redshiftStorage?: RedshiftStorage|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
