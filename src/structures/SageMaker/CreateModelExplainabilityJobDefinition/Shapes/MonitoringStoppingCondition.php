<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelExplainabilityJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxRuntimeInSeconds
 */
class MonitoringStoppingCondition extends Shape
{
    /**
     * @param array{MaxRuntimeInSeconds: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
