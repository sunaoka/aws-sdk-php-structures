<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperationV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClusterOperationStepInfo|null $StepInfo
 * @property string|null $StepName
 */
class ClusterOperationStep extends Shape
{
    /**
     * @param array{
     *     StepInfo?: ClusterOperationStepInfo|null,
     *     StepName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
