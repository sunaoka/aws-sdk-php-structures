<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $FramerateDenominator
 * @property int $FramerateNumerator
 */
class MotionImageInsertionFramerate extends Shape
{
    /**
     * @param array{
     *     FramerateDenominator?: int,
     *     FramerateNumerator?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
