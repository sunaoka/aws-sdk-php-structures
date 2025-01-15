<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 1001>|null $FramerateDenominator
 * @property int<1, 60000>|null $FramerateNumerator
 */
class CaptionSourceFramerate extends Shape
{
    /**
     * @param array{
     *     FramerateDenominator?: int<1, 1001>|null,
     *     FramerateNumerator?: int<1, 60000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
