<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $dataAccessRole
 * @property RedshiftCredentialConfiguration|null $redshiftCredentialConfiguration
 * @property RedshiftStorage|null $redshiftStorage
 * @property list<RelationalFilterConfiguration> $relationalFilterConfigurations
 */
class RedshiftRunConfigurationInput extends Shape
{
    /**
     * @param array{
     *     dataAccessRole?: string|null,
     *     redshiftCredentialConfiguration?: RedshiftCredentialConfiguration|null,
     *     redshiftStorage?: RedshiftStorage|null,
     *     relationalFilterConfigurations: list<RelationalFilterConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
