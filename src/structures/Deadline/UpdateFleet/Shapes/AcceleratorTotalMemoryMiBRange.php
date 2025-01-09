<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 2147483647> $min
 * @property int<0, 2147483647> $max
 */
class AcceleratorTotalMemoryMiBRange extends Shape
{
    /**
     * @param array{
     *     min: int<0, 2147483647>,
     *     max?: int<0, 2147483647>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
