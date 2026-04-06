<?php

namespace Sunaoka\Aws\Structures\DataZone\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GlueRunConfigurationOutput|null $glueRunConfiguration
 * @property RedshiftRunConfigurationOutput|null $redshiftRunConfiguration
 */
class DataSourceConfigurationOutput extends Shape
{
    /**
     * @param array{
     *     glueRunConfiguration?: GlueRunConfigurationOutput|null,
     *     redshiftRunConfiguration?: RedshiftRunConfigurationOutput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
