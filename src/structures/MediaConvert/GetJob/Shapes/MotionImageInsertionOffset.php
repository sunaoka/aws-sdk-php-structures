<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 2147483647> $ImageX
 * @property int<0, 2147483647> $ImageY
 */
class MotionImageInsertionOffset extends Shape
{
    /**
     * @param array{
     *     ImageX?: int<0, 2147483647>,
     *     ImageY?: int<0, 2147483647>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
