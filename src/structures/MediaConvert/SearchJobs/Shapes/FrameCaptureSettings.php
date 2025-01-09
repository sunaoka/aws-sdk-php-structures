<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 2147483647> $FramerateDenominator
 * @property int<1, 2147483647> $FramerateNumerator
 * @property int<1, 10000000> $MaxCaptures
 * @property int<1, 100> $Quality
 */
class FrameCaptureSettings extends Shape
{
    /**
     * @param array{
     *     FramerateDenominator?: int<1, 2147483647>,
     *     FramerateNumerator?: int<1, 2147483647>,
     *     MaxCaptures?: int<1, 10000000>,
     *     Quality?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
