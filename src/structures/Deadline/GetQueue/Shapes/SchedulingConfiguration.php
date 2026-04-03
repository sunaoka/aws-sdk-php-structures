<?php

namespace Sunaoka\Aws\Structures\Deadline\GetQueue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PriorityFifoSchedulingConfiguration|null $priorityFifo
 * @property PriorityBalancedSchedulingConfiguration|null $priorityBalanced
 * @property WeightedBalancedSchedulingConfiguration|null $weightedBalanced
 */
class SchedulingConfiguration extends Shape
{
    /**
     * @param array{
     *     priorityFifo?: PriorityFifoSchedulingConfiguration|null,
     *     priorityBalanced?: PriorityBalancedSchedulingConfiguration|null,
     *     weightedBalanced?: WeightedBalancedSchedulingConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
