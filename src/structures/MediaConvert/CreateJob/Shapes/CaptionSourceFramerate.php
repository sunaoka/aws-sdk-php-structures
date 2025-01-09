<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $FramerateDenominator
 * @property int $FramerateNumerator
 */
class CaptionSourceFramerate extends Shape
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
