<?php

namespace Sunaoka\Aws\Structures\Deadline\GetFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<512, 2147483647> $min
 * @property int<512, 2147483647> $max
 */
class MemoryMiBRange extends Shape
{
    /**
     * @param array{
     *     min: int<512, 2147483647>,
     *     max?: int<512, 2147483647>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
