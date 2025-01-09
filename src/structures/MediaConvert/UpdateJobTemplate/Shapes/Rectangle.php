<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Height
 * @property int $Width
 * @property int $X
 * @property int $Y
 */
class Rectangle extends Shape
{
    /**
     * @param array{
     *     Height?: int,
     *     Width?: int,
     *     X?: int,
     *     Y?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
