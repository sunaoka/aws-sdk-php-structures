<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OFF'|'LOW'|'MEDIUM'|'HIGH' $AdaptiveQuantization
 * @property int<1000, 288000000> $Bitrate
 * @property 'AUTO'|'LOW'|'MAIN'|'HIGH1440'|'HIGH' $CodecLevel
 * @property 'MAIN'|'PROFILE_422' $CodecProfile
 * @property 'ADAPTIVE'|'STATIC' $DynamicSubGop
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED' $FramerateControl
 * @property 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER' $FramerateConversionAlgorithm
 * @property int<1, 1001> $FramerateDenominator
 * @property int<24, 60000> $FramerateNumerator
 * @property int<0, 2147483647> $GopClosedCadence
 * @property double $GopSize
 * @property 'FRAMES'|'SECONDS' $GopSizeUnits
 * @property int<0, 100> $HrdBufferFinalFillPercentage
 * @property int<0, 100> $HrdBufferInitialFillPercentage
 * @property int<0, 47185920> $HrdBufferSize
 * @property 'PROGRESSIVE'|'TOP_FIELD'|'BOTTOM_FIELD'|'FOLLOW_TOP_FIELD'|'FOLLOW_BOTTOM_FIELD' $InterlaceMode
 * @property 'AUTO'|'INTRA_DC_PRECISION_8'|'INTRA_DC_PRECISION_9'|'INTRA_DC_PRECISION_10'|'INTRA_DC_PRECISION_11' $IntraDcPrecision
 * @property int<1000, 300000000> $MaxBitrate
 * @property int<0, 30> $MinIInterval
 * @property int<0, 7> $NumberBFramesBetweenReferenceFrames
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED' $ParControl
 * @property int<1, 2147483647> $ParDenominator
 * @property int<1, 2147483647> $ParNumerator
 * @property 'SINGLE_PASS'|'MULTI_PASS' $QualityTuningLevel
 * @property 'VBR'|'CBR' $RateControlMode
 * @property 'INTERLACED'|'INTERLACED_OPTIMIZE' $ScanTypeConversionMode
 * @property 'DISABLED'|'ENABLED' $SceneChangeDetect
 * @property 'DISABLED'|'ENABLED' $SlowPal
 * @property int<0, 128> $Softness
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
     *     Bitrate?: int<1000, 288000000>,
     *     CodecLevel?: 'AUTO'|'LOW'|'MAIN'|'HIGH1440'|'HIGH',
     *     CodecProfile?: 'MAIN'|'PROFILE_422',
     *     DynamicSubGop?: 'ADAPTIVE'|'STATIC',
     *     FramerateControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED',
     *     FramerateConversionAlgorithm?: 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER',
     *     FramerateDenominator?: int<1, 1001>,
     *     FramerateNumerator?: int<24, 60000>,
     *     GopClosedCadence?: int<0, 2147483647>,
     *     GopSize?: double,
     *     GopSizeUnits?: 'FRAMES'|'SECONDS',
     *     HrdBufferFinalFillPercentage?: int<0, 100>,
     *     HrdBufferInitialFillPercentage?: int<0, 100>,
     *     HrdBufferSize?: int<0, 47185920>,
     *     InterlaceMode?: 'PROGRESSIVE'|'TOP_FIELD'|'BOTTOM_FIELD'|'FOLLOW_TOP_FIELD'|'FOLLOW_BOTTOM_FIELD',
     *     IntraDcPrecision?: 'AUTO'|'INTRA_DC_PRECISION_8'|'INTRA_DC_PRECISION_9'|'INTRA_DC_PRECISION_10'|'INTRA_DC_PRECISION_11',
     *     MaxBitrate?: int<1000, 300000000>,
     *     MinIInterval?: int<0, 30>,
     *     NumberBFramesBetweenReferenceFrames?: int<0, 7>,
     *     ParControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED',
     *     ParDenominator?: int<1, 2147483647>,
     *     ParNumerator?: int<1, 2147483647>,
     *     QualityTuningLevel?: 'SINGLE_PASS'|'MULTI_PASS',
     *     RateControlMode?: 'VBR'|'CBR',
     *     ScanTypeConversionMode?: 'INTERLACED'|'INTERLACED_OPTIMIZE',
     *     SceneChangeDetect?: 'DISABLED'|'ENABLED',
     *     SlowPal?: 'DISABLED'|'ENABLED',
     *     Softness?: int<0, 128>,
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
