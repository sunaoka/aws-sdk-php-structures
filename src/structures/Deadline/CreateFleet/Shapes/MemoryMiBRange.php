<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<512, 2147483647> $min
 * @property int<512, 2147483647>|null $max
 */
class MemoryMiBRange extends Shape
{
    /**
     * @param array{
     *     min: int<512, 2147483647>,
     *     max?: int<512, 2147483647>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
