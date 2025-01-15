<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GlueRunConfigurationInput|null $glueRunConfiguration
 * @property RedshiftRunConfigurationInput|null $redshiftRunConfiguration
 * @property SageMakerRunConfigurationInput|null $sageMakerRunConfiguration
 */
class DataSourceConfigurationInput extends Shape
{
    /**
     * @param array{
     *     glueRunConfiguration?: GlueRunConfigurationInput|null,
     *     redshiftRunConfiguration?: RedshiftRunConfigurationInput|null,
     *     sageMakerRunConfiguration?: SageMakerRunConfigurationInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
