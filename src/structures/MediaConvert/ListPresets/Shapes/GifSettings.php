<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListPresets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null $FramerateControl
 * @property 'DUPLICATE_DROP'|'INTERPOLATE'|null $FramerateConversionAlgorithm
 * @property int<1, 2147483647>|null $FramerateDenominator
 * @property int<1, 2147483647>|null $FramerateNumerator
 */
class GifSettings extends Shape
{
    /**
     * @param array{
     *     FramerateControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null,
     *     FramerateConversionAlgorithm?: 'DUPLICATE_DROP'|'INTERPOLATE'|null,
     *     FramerateDenominator?: int<1, 2147483647>|null,
     *     FramerateNumerator?: int<1, 2147483647>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
