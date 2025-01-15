<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 2147483647>|null $ImageX
 * @property int<0, 2147483647>|null $ImageY
 */
class MotionImageInsertionOffset extends Shape
{
    /**
     * @param array{
     *     ImageX?: int<0, 2147483647>|null,
     *     ImageY?: int<0, 2147483647>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
