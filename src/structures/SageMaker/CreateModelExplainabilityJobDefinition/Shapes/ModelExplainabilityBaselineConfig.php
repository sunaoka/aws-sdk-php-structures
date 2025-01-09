<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelExplainabilityJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BaseliningJobName
 * @property MonitoringConstraintsResource $ConstraintsResource
 */
class ModelExplainabilityBaselineConfig extends Shape
{
    /**
     * @param array{
     *     BaseliningJobName?: string,
     *     ConstraintsResource?: MonitoringConstraintsResource
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
