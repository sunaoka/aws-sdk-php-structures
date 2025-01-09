<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperationV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClusterOperationStepInfo $StepInfo
 * @property string $StepName
 */
class ClusterOperationStep extends Shape
{
    /**
     * @param array{
     *     StepInfo?: ClusterOperationStepInfo,
     *     StepName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
