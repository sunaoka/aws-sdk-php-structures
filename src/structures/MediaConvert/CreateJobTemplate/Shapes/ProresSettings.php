<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PRESERVE_444_SAMPLING'|'SUBSAMPLE_TO_422' $ChromaSampling
 * @property 'APPLE_PRORES_422'|'APPLE_PRORES_422_HQ'|'APPLE_PRORES_422_LT'|'APPLE_PRORES_422_PROXY'|'APPLE_PRORES_4444'|'APPLE_PRORES_4444_XQ' $CodecProfile
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED' $FramerateControl
 * @property 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER' $FramerateConversionAlgorithm
 * @property int<1, 2147483647> $FramerateDenominator
 * @property int<1, 2147483647> $FramerateNumerator
 * @property 'PROGRESSIVE'|'TOP_FIELD'|'BOTTOM_FIELD'|'FOLLOW_TOP_FIELD'|'FOLLOW_BOTTOM_FIELD' $InterlaceMode
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED' $ParControl
 * @property int<1, 2147483647> $ParDenominator
 * @property int<1, 2147483647> $ParNumerator
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
     *     FramerateDenominator?: int<1, 2147483647>,
     *     FramerateNumerator?: int<1, 2147483647>,
     *     InterlaceMode?: 'PROGRESSIVE'|'TOP_FIELD'|'BOTTOM_FIELD'|'FOLLOW_TOP_FIELD'|'FOLLOW_BOTTOM_FIELD',
     *     ParControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED',
     *     ParDenominator?: int<1, 2147483647>,
     *     ParNumerator?: int<1, 2147483647>,
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
