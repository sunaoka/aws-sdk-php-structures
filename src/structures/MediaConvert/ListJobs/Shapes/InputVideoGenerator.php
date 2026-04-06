<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 32>|null $Channels
 * @property int<50, 86400000>|null $Duration
 * @property int<1, 1001>|null $FramerateDenominator
 * @property int<1, 60000>|null $FramerateNumerator
 * @property int<32000, 48000>|null $SampleRate
 */
class InputVideoGenerator extends Shape
{
    /**
     * @param array{
     *     Channels?: int<1, 32>|null,
     *     Duration?: int<50, 86400000>|null,
     *     FramerateDenominator?: int<1, 1001>|null,
     *     FramerateNumerator?: int<1, 60000>|null,
     *     SampleRate?: int<32000, 48000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
