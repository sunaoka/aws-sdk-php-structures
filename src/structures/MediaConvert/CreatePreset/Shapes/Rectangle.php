<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<2, 2147483647>|null $Height
 * @property int<2, 2147483647>|null $Width
 * @property int<0, 2147483647>|null $X
 * @property int<0, 2147483647>|null $Y
 */
class Rectangle extends Shape
{
    /**
     * @param array{
     *     Height?: int<2, 2147483647>|null,
     *     Width?: int<2, 2147483647>|null,
     *     X?: int<0, 2147483647>|null,
     *     Y?: int<0, 2147483647>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
