<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CapacitySize $MaximumBatchSize
 * @property int $WaitIntervalInSeconds
 * @property int $MaximumExecutionTimeoutInSeconds
 * @property CapacitySize $RollbackMaximumBatchSize
 */
class RollingUpdatePolicy extends Shape
{
    /**
     * @param array{
     *     MaximumBatchSize: CapacitySize,
     *     WaitIntervalInSeconds: int,
     *     MaximumExecutionTimeoutInSeconds?: int,
     *     RollbackMaximumBatchSize?: CapacitySize
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
