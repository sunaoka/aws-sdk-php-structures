<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OFF'|'LOW'|'MEDIUM'|'HIGH'|null $AdaptiveQuantization
 * @property int<1000, 288000000>|null $Bitrate
 * @property 'AUTO'|'LOW'|'MAIN'|'HIGH1440'|'HIGH'|null $CodecLevel
 * @property 'MAIN'|'PROFILE_422'|null $CodecProfile
 * @property 'ADAPTIVE'|'STATIC'|null $DynamicSubGop
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null $FramerateControl
 * @property 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER'|'MAINTAIN_FRAME_COUNT'|null $FramerateConversionAlgorithm
 * @property int<1, 1001>|null $FramerateDenominator
 * @property int<24, 60000>|null $FramerateNumerator
 * @property int<0, 2147483647>|null $GopClosedCadence
 * @property double|null $GopSize
 * @property 'FRAMES'|'SECONDS'|null $GopSizeUnits
 * @property int<0, 100>|null $HrdBufferFinalFillPercentage
 * @property int<0, 100>|null $HrdBufferInitialFillPercentage
 * @property int<0, 47185920>|null $HrdBufferSize
 * @property 'PROGRESSIVE'|'TOP_FIELD'|'BOTTOM_FIELD'|'FOLLOW_TOP_FIELD'|'FOLLOW_BOTTOM_FIELD'|null $InterlaceMode
 * @property 'AUTO'|'INTRA_DC_PRECISION_8'|'INTRA_DC_PRECISION_9'|'INTRA_DC_PRECISION_10'|'INTRA_DC_PRECISION_11'|null $IntraDcPrecision
 * @property int<1000, 300000000>|null $MaxBitrate
 * @property int<0, 30>|null $MinIInterval
 * @property int<0, 7>|null $NumberBFramesBetweenReferenceFrames
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null $ParControl
 * @property int<1, 2147483647>|null $ParDenominator
 * @property int<1, 2147483647>|null $ParNumerator
 * @property 'SINGLE_PASS'|'MULTI_PASS'|null $QualityTuningLevel
 * @property 'VBR'|'CBR'|null $RateControlMode
 * @property 'INTERLACED'|'INTERLACED_OPTIMIZE'|null $ScanTypeConversionMode
 * @property 'DISABLED'|'ENABLED'|null $SceneChangeDetect
 * @property 'DISABLED'|'ENABLED'|null $SlowPal
 * @property int<0, 128>|null $Softness
 * @property 'DISABLED'|'ENABLED'|null $SpatialAdaptiveQuantization
 * @property 'DEFAULT'|'D_10'|null $Syntax
 * @property 'NONE'|'SOFT'|'HARD'|null $Telecine
 * @property 'DISABLED'|'ENABLED'|null $TemporalAdaptiveQuantization
 */
class Mpeg2Settings extends Shape
{
    /**
     * @param array{
     *     AdaptiveQuantization?: 'OFF'|'LOW'|'MEDIUM'|'HIGH'|null,
     *     Bitrate?: int<1000, 288000000>|null,
     *     CodecLevel?: 'AUTO'|'LOW'|'MAIN'|'HIGH1440'|'HIGH'|null,
     *     CodecProfile?: 'MAIN'|'PROFILE_422'|null,
     *     DynamicSubGop?: 'ADAPTIVE'|'STATIC'|null,
     *     FramerateControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null,
     *     FramerateConversionAlgorithm?: 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER'|'MAINTAIN_FRAME_COUNT'|null,
     *     FramerateDenominator?: int<1, 1001>|null,
     *     FramerateNumerator?: int<24, 60000>|null,
     *     GopClosedCadence?: int<0, 2147483647>|null,
     *     GopSize?: double|null,
     *     GopSizeUnits?: 'FRAMES'|'SECONDS'|null,
     *     HrdBufferFinalFillPercentage?: int<0, 100>|null,
     *     HrdBufferInitialFillPercentage?: int<0, 100>|null,
     *     HrdBufferSize?: int<0, 47185920>|null,
     *     InterlaceMode?: 'PROGRESSIVE'|'TOP_FIELD'|'BOTTOM_FIELD'|'FOLLOW_TOP_FIELD'|'FOLLOW_BOTTOM_FIELD'|null,
     *     IntraDcPrecision?: 'AUTO'|'INTRA_DC_PRECISION_8'|'INTRA_DC_PRECISION_9'|'INTRA_DC_PRECISION_10'|'INTRA_DC_PRECISION_11'|null,
     *     MaxBitrate?: int<1000, 300000000>|null,
     *     MinIInterval?: int<0, 30>|null,
     *     NumberBFramesBetweenReferenceFrames?: int<0, 7>|null,
     *     ParControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null,
     *     ParDenominator?: int<1, 2147483647>|null,
     *     ParNumerator?: int<1, 2147483647>|null,
     *     QualityTuningLevel?: 'SINGLE_PASS'|'MULTI_PASS'|null,
     *     RateControlMode?: 'VBR'|'CBR'|null,
     *     ScanTypeConversionMode?: 'INTERLACED'|'INTERLACED_OPTIMIZE'|null,
     *     SceneChangeDetect?: 'DISABLED'|'ENABLED'|null,
     *     SlowPal?: 'DISABLED'|'ENABLED'|null,
     *     Softness?: int<0, 128>|null,
     *     SpatialAdaptiveQuantization?: 'DISABLED'|'ENABLED'|null,
     *     Syntax?: 'DEFAULT'|'D_10'|null,
     *     Telecine?: 'NONE'|'SOFT'|'HARD'|null,
     *     TemporalAdaptiveQuantization?: 'DISABLED'|'ENABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
