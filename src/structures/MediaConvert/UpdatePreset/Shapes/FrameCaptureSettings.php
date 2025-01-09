<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $FramerateDenominator
 * @property int $FramerateNumerator
 * @property int $MaxCaptures
 * @property int $Quality
 */
class FrameCaptureSettings extends Shape
{
    /**
     * @param array{
     *     FramerateDenominator?: int,
     *     FramerateNumerator?: int,
     *     MaxCaptures?: int,
     *     Quality?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
