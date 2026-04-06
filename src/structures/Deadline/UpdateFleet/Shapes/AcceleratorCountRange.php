<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 2147483647>|null $max
 * @property int<0, 2147483647> $min
 */
class AcceleratorCountRange extends Shape
{
    /**
     * @param array{
     *     max?: int<0, 2147483647>|null,
     *     min: int<0, 2147483647>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
