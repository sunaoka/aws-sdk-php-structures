<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InferenceComponentCapacitySize $MaximumBatchSize
 * @property int<0, 3600> $WaitIntervalInSeconds
 * @property int<600, 28800>|null $MaximumExecutionTimeoutInSeconds
 * @property InferenceComponentCapacitySize|null $RollbackMaximumBatchSize
 */
class InferenceComponentRollingUpdatePolicy extends Shape
{
    /**
     * @param array{
     *     MaximumBatchSize: InferenceComponentCapacitySize,
     *     WaitIntervalInSeconds: int<0, 3600>,
     *     MaximumExecutionTimeoutInSeconds?: int<600, 28800>|null,
     *     RollbackMaximumBatchSize?: InferenceComponentCapacitySize|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
