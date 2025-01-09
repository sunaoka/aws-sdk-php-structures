<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GlueRunConfigurationInput $glueRunConfiguration
 * @property RedshiftRunConfigurationInput $redshiftRunConfiguration
 * @property SageMakerRunConfigurationInput $sageMakerRunConfiguration
 */
class DataSourceConfigurationInput extends Shape
{
    /**
     * @param array{
     *     glueRunConfiguration?: GlueRunConfigurationInput,
     *     redshiftRunConfiguration?: RedshiftRunConfigurationInput,
     *     sageMakerRunConfiguration?: SageMakerRunConfigurationInput
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
