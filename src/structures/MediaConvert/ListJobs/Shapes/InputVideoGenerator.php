<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 32>|null $Channels
 * @property int<1, 86400000>|null $Duration
 * @property int<1, 1001>|null $FramerateDenominator
 * @property int<1, 60000>|null $FramerateNumerator
 * @property int<32, 8192>|null $Height
 * @property int<32000, 48000>|null $SampleRate
 * @property int<32, 8192>|null $Width
 */
class InputVideoGenerator extends Shape
{
    /**
     * @param array{
     *     Channels?: int<1, 32>|null,
     *     Duration?: int<1, 86400000>|null,
     *     FramerateDenominator?: int<1, 1001>|null,
     *     FramerateNumerator?: int<1, 60000>|null,
     *     Height?: int<32, 8192>|null,
     *     SampleRate?: int<32000, 48000>|null,
     *     Width?: int<32, 8192>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
