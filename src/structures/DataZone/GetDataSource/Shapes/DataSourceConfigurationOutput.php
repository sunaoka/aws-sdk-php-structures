<?php

namespace Sunaoka\Aws\Structures\DataZone\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GlueRunConfigurationOutput|null $glueRunConfiguration
 * @property RedshiftRunConfigurationOutput|null $redshiftRunConfiguration
 * @property SageMakerRunConfigurationOutput|null $sageMakerRunConfiguration
 */
class DataSourceConfigurationOutput extends Shape
{
    /**
     * @param array{
     *     glueRunConfiguration?: GlueRunConfigurationOutput|null,
     *     redshiftRunConfiguration?: RedshiftRunConfigurationOutput|null,
     *     sageMakerRunConfiguration?: SageMakerRunConfigurationOutput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
