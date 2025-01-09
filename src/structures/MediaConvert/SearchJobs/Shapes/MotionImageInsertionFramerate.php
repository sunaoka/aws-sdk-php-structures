<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 17895697> $FramerateDenominator
 * @property int<1, 2147483640> $FramerateNumerator
 */
class MotionImageInsertionFramerate extends Shape
{
    /**
     * @param array{
     *     FramerateDenominator?: int<1, 17895697>,
     *     FramerateNumerator?: int<1, 2147483640>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
