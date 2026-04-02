<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateQueue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 1000>|null $renderingTaskBuffer
 */
class PriorityBalancedSchedulingConfiguration extends Shape
{
    /**
     * @param array{renderingTaskBuffer?: int<0, 1000>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
