<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<2, 2147483647> $Height
 * @property int<2, 2147483647> $Width
 * @property int<0, 2147483647> $X
 * @property int<0, 2147483647> $Y
 */
class Rectangle extends Shape
{
    /**
     * @param array{
     *     Height?: int<2, 2147483647>,
     *     Width?: int<2, 2147483647>,
     *     X?: int<0, 2147483647>,
     *     Y?: int<0, 2147483647>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
