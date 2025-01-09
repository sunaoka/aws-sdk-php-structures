<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeProcessingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxRuntimeInSeconds
 */
class ProcessingStoppingCondition extends Shape
{
    /**
     * @param array{MaxRuntimeInSeconds: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
