<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OFF'|'LOW'|'MEDIUM'|'HIGH' $AdaptiveQuantization
 * @property int $Bitrate
 * @property 'AUTO'|'LOW'|'MAIN'|'HIGH1440'|'HIGH' $CodecLevel
 * @property 'MAIN'|'PROFILE_422' $CodecProfile
 * @property 'ADAPTIVE'|'STATIC' $DynamicSubGop
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED' $FramerateControl
 * @property 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER' $FramerateConversionAlgorithm
 * @property int $FramerateDenominator
 * @property int $FramerateNumerator
 * @property int $GopClosedCadence
 * @property double $GopSize
 * @property 'FRAMES'|'SECONDS' $GopSizeUnits
 * @property int $HrdBufferFinalFillPercentage
 * @property int $HrdBufferInitialFillPercentage
 * @property int $HrdBufferSize
 * @property 'PROGRESSIVE'|'TOP_FIELD'|'BOTTOM_FIELD'|'FOLLOW_TOP_FIELD'|'FOLLOW_BOTTOM_FIELD' $InterlaceMode
 * @property 'AUTO'|'INTRA_DC_PRECISION_8'|'INTRA_DC_PRECISION_9'|'INTRA_DC_PRECISION_10'|'INTRA_DC_PRECISION_11' $IntraDcPrecision
 * @property int $MaxBitrate
 * @property int $MinIInterval
 * @property int $NumberBFramesBetweenReferenceFrames
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED' $ParControl
 * @property int $ParDenominator
 * @property int $ParNumerator
 * @property 'SINGLE_PASS'|'MULTI_PASS' $QualityTuningLevel
 * @property 'VBR'|'CBR' $RateControlMode
 * @property 'INTERLACED'|'INTERLACED_OPTIMIZE' $ScanTypeConversionMode
 * @property 'DISABLED'|'ENABLED' $SceneChangeDetect
 * @property 'DISABLED'|'ENABLED' $SlowPal
 * @property int $Softness
 * @property 'DISABLED'|'ENABLED' $SpatialAdaptiveQuantization
 * @property 'DEFAULT'|'D_10' $Syntax
 * @property 'NONE'|'SOFT'|'HARD' $Telecine
 * @property 'DISABLED'|'ENABLED' $TemporalAdaptiveQuantization
 */
class Mpeg2Settings extends Shape
{
    /**
     * @param array{
     *     AdaptiveQuantization?: 'OFF'|'LOW'|'MEDIUM'|'HIGH',
     *     Bitrate?: int,
     *     CodecLevel?: 'AUTO'|'LOW'|'MAIN'|'HIGH1440'|'HIGH',
     *     CodecProfile?: 'MAIN'|'PROFILE_422',
     *     DynamicSubGop?: 'ADAPTIVE'|'STATIC',
     *     FramerateControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED',
     *     FramerateConversionAlgorithm?: 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER',
     *     FramerateDenominator?: int,
     *     FramerateNumerator?: int,
     *     GopClosedCadence?: int,
     *     GopSize?: double,
     *     GopSizeUnits?: 'FRAMES'|'SECONDS',
     *     HrdBufferFinalFillPercentage?: int,
     *     HrdBufferInitialFillPercentage?: int,
     *     HrdBufferSize?: int,
     *     InterlaceMode?: 'PROGRESSIVE'|'TOP_FIELD'|'BOTTOM_FIELD'|'FOLLOW_TOP_FIELD'|'FOLLOW_BOTTOM_FIELD',
     *     IntraDcPrecision?: 'AUTO'|'INTRA_DC_PRECISION_8'|'INTRA_DC_PRECISION_9'|'INTRA_DC_PRECISION_10'|'INTRA_DC_PRECISION_11',
     *     MaxBitrate?: int,
     *     MinIInterval?: int,
     *     NumberBFramesBetweenReferenceFrames?: int,
     *     ParControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED',
     *     ParDenominator?: int,
     *     ParNumerator?: int,
     *     QualityTuningLevel?: 'SINGLE_PASS'|'MULTI_PASS',
     *     RateControlMode?: 'VBR'|'CBR',
     *     ScanTypeConversionMode?: 'INTERLACED'|'INTERLACED_OPTIMIZE',
     *     SceneChangeDetect?: 'DISABLED'|'ENABLED',
     *     SlowPal?: 'DISABLED'|'ENABLED',
     *     Softness?: int,
     *     SpatialAdaptiveQuantization?: 'DISABLED'|'ENABLED',
     *     Syntax?: 'DEFAULT'|'D_10',
     *     Telecine?: 'NONE'|'SOFT'|'HARD',
     *     TemporalAdaptiveQuantization?: 'DISABLED'|'ENABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
