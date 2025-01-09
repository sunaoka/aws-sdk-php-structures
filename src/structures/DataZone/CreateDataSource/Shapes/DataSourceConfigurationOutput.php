<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GlueRunConfigurationOutput $glueRunConfiguration
 * @property RedshiftRunConfigurationOutput $redshiftRunConfiguration
 * @property SageMakerRunConfigurationOutput $sageMakerRunConfiguration
 */
class DataSourceConfigurationOutput extends Shape
{
    /**
     * @param array{
     *     glueRunConfiguration?: GlueRunConfigurationOutput,
     *     redshiftRunConfiguration?: RedshiftRunConfigurationOutput,
     *     sageMakerRunConfiguration?: SageMakerRunConfigurationOutput
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
