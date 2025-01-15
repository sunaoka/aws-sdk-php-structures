<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelQualityJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BaseliningJobName
 * @property MonitoringConstraintsResource|null $ConstraintsResource
 */
class ModelQualityBaselineConfig extends Shape
{
    /**
     * @param array{
     *     BaseliningJobName?: string|null,
     *     ConstraintsResource?: MonitoringConstraintsResource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
