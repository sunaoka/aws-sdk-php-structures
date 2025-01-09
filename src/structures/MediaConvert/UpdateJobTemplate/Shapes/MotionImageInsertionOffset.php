<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ImageX
 * @property int $ImageY
 */
class MotionImageInsertionOffset extends Shape
{
    /**
     * @param array{
     *     ImageX?: int,
     *     ImageY?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
