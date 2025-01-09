<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 1001> $FramerateDenominator
 * @property int<1, 60000> $FramerateNumerator
 */
class CaptionSourceFramerate extends Shape
{
    /**
     * @param array{
     *     FramerateDenominator?: int<1, 1001>,
     *     FramerateNumerator?: int<1, 60000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
