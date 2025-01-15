<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateEventSourceMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<2, 1000>|null $MaximumConcurrency
 */
class ScalingConfig extends Shape
{
    /**
     * @param array{MaximumConcurrency?: int<2, 1000>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
