<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CapacitySize $MaximumBatchSize
 * @property int<0, 3600> $WaitIntervalInSeconds
 * @property int<600, 28800> $MaximumExecutionTimeoutInSeconds
 * @property CapacitySize $RollbackMaximumBatchSize
 */
class RollingUpdatePolicy extends Shape
{
    /**
     * @param array{
     *     MaximumBatchSize: CapacitySize,
     *     WaitIntervalInSeconds: int<0, 3600>,
     *     MaximumExecutionTimeoutInSeconds?: int<600, 28800>,
     *     RollbackMaximumBatchSize?: CapacitySize
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
