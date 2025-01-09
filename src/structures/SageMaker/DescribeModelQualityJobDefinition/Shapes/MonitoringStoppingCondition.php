<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelQualityJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 86400> $MaxRuntimeInSeconds
 */
class MonitoringStoppingCondition extends Shape
{
    /**
     * @param array{MaxRuntimeInSeconds: int<1, 86400>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
