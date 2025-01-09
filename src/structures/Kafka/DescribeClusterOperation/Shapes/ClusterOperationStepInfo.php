<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StepStatus
 */
class ClusterOperationStepInfo extends Shape
{
    /**
     * @param array{StepStatus?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
