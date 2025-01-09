<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListPresets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PRESERVE_444_SAMPLING'|'SUBSAMPLE_TO_422' $ChromaSampling
 * @property 'APPLE_PRORES_422'|'APPLE_PRORES_422_HQ'|'APPLE_PRORES_422_LT'|'APPLE_PRORES_422_PROXY'|'APPLE_PRORES_4444'|'APPLE_PRORES_4444_XQ' $CodecProfile
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED' $FramerateControl
 * @property 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER' $FramerateConversionAlgorithm
 * @property int $FramerateDenominator
 * @property int $FramerateNumerator
 * @property 'PROGRESSIVE'|'TOP_FIELD'|'BOTTOM_FIELD'|'FOLLOW_TOP_FIELD'|'FOLLOW_BOTTOM_FIELD' $InterlaceMode
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED' $ParControl
 * @property int $ParDenominator
 * @property int $ParNumerator
 * @property 'INTERLACED'|'INTERLACED_OPTIMIZE' $ScanTypeConversionMode
 * @property 'DISABLED'|'ENABLED' $SlowPal
 * @property 'NONE'|'HARD' $Telecine
 */
class ProresSettings extends Shape
{
    /**
     * @param array{
     *     ChromaSampling?: 'PRESERVE_444_SAMPLING'|'SUBSAMPLE_TO_422',
     *     CodecProfile?: 'APPLE_PRORES_422'|'APPLE_PRORES_422_HQ'|'APPLE_PRORES_422_LT'|'APPLE_PRORES_422_PROXY'|'APPLE_PRORES_4444'|'APPLE_PRORES_4444_XQ',
     *     FramerateControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED',
     *     FramerateConversionAlgorithm?: 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER',
     *     FramerateDenominator?: int,
     *     FramerateNumerator?: int,
     *     InterlaceMode?: 'PROGRESSIVE'|'TOP_FIELD'|'BOTTOM_FIELD'|'FOLLOW_TOP_FIELD'|'FOLLOW_BOTTOM_FIELD',
     *     ParControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED',
     *     ParDenominator?: int,
     *     ParNumerator?: int,
     *     ScanTypeConversionMode?: 'INTERLACED'|'INTERLACED_OPTIMIZE',
     *     SlowPal?: 'DISABLED'|'ENABLED',
     *     Telecine?: 'NONE'|'HARD'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
