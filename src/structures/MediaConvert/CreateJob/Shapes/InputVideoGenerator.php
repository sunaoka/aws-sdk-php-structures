<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Channels
 * @property int $Duration
 * @property int $FramerateDenominator
 * @property int $FramerateNumerator
 * @property int $SampleRate
 */
class InputVideoGenerator extends Shape
{
    /**
     * @param array{
     *     Channels?: int,
     *     Duration?: int,
     *     FramerateDenominator?: int,
     *     FramerateNumerator?: int,
     *     SampleRate?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
