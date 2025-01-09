<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 32> $Channels
 * @property int<50, 86400000> $Duration
 * @property int<1, 1001> $FramerateDenominator
 * @property int<1, 60000> $FramerateNumerator
 * @property int<32000, 48000> $SampleRate
 */
class InputVideoGenerator extends Shape
{
    /**
     * @param array{
     *     Channels?: int<1, 32>,
     *     Duration?: int<50, 86400000>,
     *     FramerateDenominator?: int<1, 1001>,
     *     FramerateNumerator?: int<1, 60000>,
     *     SampleRate?: int<32000, 48000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
