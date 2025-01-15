<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 17895697>|null $FramerateDenominator
 * @property int<1, 2147483640>|null $FramerateNumerator
 */
class MotionImageInsertionFramerate extends Shape
{
    /**
     * @param array{
     *     FramerateDenominator?: int<1, 17895697>|null,
     *     FramerateNumerator?: int<1, 2147483640>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
