<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GlueRunConfigurationInput|null $glueRunConfiguration
 * @property RedshiftRunConfigurationInput|null $redshiftRunConfiguration
 */
class DataSourceConfigurationInput extends Shape
{
    /**
     * @param array{
     *     glueRunConfiguration?: GlueRunConfigurationInput|null,
     *     redshiftRunConfiguration?: RedshiftRunConfigurationInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
