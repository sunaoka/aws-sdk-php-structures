<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StepStatus
 */
class ClusterOperationStepInfo extends Shape
{
    /**
     * @param array{StepStatus?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
