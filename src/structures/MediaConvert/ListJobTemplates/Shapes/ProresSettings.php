<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PRESERVE_444_SAMPLING'|'SUBSAMPLE_TO_422'|null $ChromaSampling
 * @property 'APPLE_PRORES_422'|'APPLE_PRORES_422_HQ'|'APPLE_PRORES_422_LT'|'APPLE_PRORES_422_PROXY'|'APPLE_PRORES_4444'|'APPLE_PRORES_4444_XQ'|null $CodecProfile
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null $FramerateControl
 * @property 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER'|null $FramerateConversionAlgorithm
 * @property int<1, 2147483647>|null $FramerateDenominator
 * @property int<1, 2147483647>|null $FramerateNumerator
 * @property 'PROGRESSIVE'|'TOP_FIELD'|'BOTTOM_FIELD'|'FOLLOW_TOP_FIELD'|'FOLLOW_BOTTOM_FIELD'|null $InterlaceMode
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null $ParControl
 * @property int<1, 2147483647>|null $ParDenominator
 * @property int<1, 2147483647>|null $ParNumerator
 * @property 'INTERLACED'|'INTERLACED_OPTIMIZE'|null $ScanTypeConversionMode
 * @property 'DISABLED'|'ENABLED'|null $SlowPal
 * @property 'NONE'|'HARD'|null $Telecine
 */
class ProresSettings extends Shape
{
    /**
     * @param array{
     *     ChromaSampling?: 'PRESERVE_444_SAMPLING'|'SUBSAMPLE_TO_422'|null,
     *     CodecProfile?: 'APPLE_PRORES_422'|'APPLE_PRORES_422_HQ'|'APPLE_PRORES_422_LT'|'APPLE_PRORES_422_PROXY'|'APPLE_PRORES_4444'|'APPLE_PRORES_4444_XQ'|null,
     *     FramerateControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null,
     *     FramerateConversionAlgorithm?: 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER'|null,
     *     FramerateDenominator?: int<1, 2147483647>|null,
     *     FramerateNumerator?: int<1, 2147483647>|null,
     *     InterlaceMode?: 'PROGRESSIVE'|'TOP_FIELD'|'BOTTOM_FIELD'|'FOLLOW_TOP_FIELD'|'FOLLOW_BOTTOM_FIELD'|null,
     *     ParControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null,
     *     ParDenominator?: int<1, 2147483647>|null,
     *     ParNumerator?: int<1, 2147483647>|null,
     *     ScanTypeConversionMode?: 'INTERLACED'|'INTERLACED_OPTIMIZE'|null,
     *     SlowPal?: 'DISABLED'|'ENABLED'|null,
     *     Telecine?: 'NONE'|'HARD'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
