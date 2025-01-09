<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OFF'|'LOW'|'MEDIUM'|'HIGH'|'HIGHER'|'MAX'|'AUTO' $AdaptiveQuantization
 * @property 'DISABLED'|'ENABLED' $AlternateTransferFunctionSei
 * @property BandwidthReductionFilter $BandwidthReductionFilter
 * @property int<1000, 1466400000> $Bitrate
 * @property 'AUTO'|'LEVEL_1'|'LEVEL_2'|'LEVEL_2_1'|'LEVEL_3'|'LEVEL_3_1'|'LEVEL_4'|'LEVEL_4_1'|'LEVEL_5'|'LEVEL_5_1'|'LEVEL_5_2'|'LEVEL_6'|'LEVEL_6_1'|'LEVEL_6_2' $CodecLevel
 * @property 'MAIN_MAIN'|'MAIN_HIGH'|'MAIN10_MAIN'|'MAIN10_HIGH'|'MAIN_422_8BIT_MAIN'|'MAIN_422_8BIT_HIGH'|'MAIN_422_10BIT_MAIN'|'MAIN_422_10BIT_HIGH' $CodecProfile
 * @property 'ADAPTIVE'|'STATIC' $DynamicSubGop
 * @property 'INCLUDE'|'SUPPRESS' $EndOfStreamMarkers
 * @property 'DISABLED'|'ENABLED' $FlickerAdaptiveQuantization
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED' $FramerateControl
 * @property 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER' $FramerateConversionAlgorithm
 * @property int<1, 2147483647> $FramerateDenominator
 * @property int<1, 2147483647> $FramerateNumerator
 * @property 'DISABLED'|'ENABLED' $GopBReference
 * @property int<0, 2147483647> $GopClosedCadence
 * @property double $GopSize
 * @property 'FRAMES'|'SECONDS'|'AUTO' $GopSizeUnits
 * @property int<0, 100> $HrdBufferFinalFillPercentage
 * @property int<0, 100> $HrdBufferInitialFillPercentage
 * @property int<0, 1466400000> $HrdBufferSize
 * @property 'PROGRESSIVE'|'TOP_FIELD'|'BOTTOM_FIELD'|'FOLLOW_TOP_FIELD'|'FOLLOW_BOTTOM_FIELD' $InterlaceMode
 * @property int<1000, 1466400000> $MaxBitrate
 * @property int<0, 30> $MinIInterval
 * @property int<0, 7> $NumberBFramesBetweenReferenceFrames
 * @property int<1, 6> $NumberReferenceFrames
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED' $ParControl
 * @property int<1, 2147483647> $ParDenominator
 * @property int<1, 2147483647> $ParNumerator
 * @property 'SINGLE_PASS'|'SINGLE_PASS_HQ'|'MULTI_PASS_HQ' $QualityTuningLevel
 * @property H265QvbrSettings $QvbrSettings
 * @property 'VBR'|'CBR'|'QVBR' $RateControlMode
 * @property 'DEFAULT'|'ADAPTIVE'|'OFF' $SampleAdaptiveOffsetFilterMode
 * @property 'INTERLACED'|'INTERLACED_OPTIMIZE' $ScanTypeConversionMode
 * @property 'DISABLED'|'ENABLED'|'TRANSITION_DETECTION' $SceneChangeDetect
 * @property int<1, 32> $Slices
 * @property 'DISABLED'|'ENABLED' $SlowPal
 * @property 'DISABLED'|'ENABLED' $SpatialAdaptiveQuantization
 * @property 'NONE'|'SOFT'|'HARD' $Telecine
 * @property 'DISABLED'|'ENABLED' $TemporalAdaptiveQuantization
 * @property 'DISABLED'|'ENABLED' $TemporalIds
 * @property 'DISABLED'|'ENABLED' $Tiles
 * @property 'DISABLED'|'ENABLED' $UnregisteredSeiTimecode
 * @property 'HVC1'|'HEV1' $WriteMp4PackagingType
 */
class H265Settings extends Shape
{
    /**
     * @param array{
     *     AdaptiveQuantization?: 'OFF'|'LOW'|'MEDIUM'|'HIGH'|'HIGHER'|'MAX'|'AUTO',
     *     AlternateTransferFunctionSei?: 'DISABLED'|'ENABLED',
     *     BandwidthReductionFilter?: BandwidthReductionFilter,
     *     Bitrate?: int<1000, 1466400000>,
     *     CodecLevel?: 'AUTO'|'LEVEL_1'|'LEVEL_2'|'LEVEL_2_1'|'LEVEL_3'|'LEVEL_3_1'|'LEVEL_4'|'LEVEL_4_1'|'LEVEL_5'|'LEVEL_5_1'|'LEVEL_5_2'|'LEVEL_6'|'LEVEL_6_1'|'LEVEL_6_2',
     *     CodecProfile?: 'MAIN_MAIN'|'MAIN_HIGH'|'MAIN10_MAIN'|'MAIN10_HIGH'|'MAIN_422_8BIT_MAIN'|'MAIN_422_8BIT_HIGH'|'MAIN_422_10BIT_MAIN'|'MAIN_422_10BIT_HIGH',
     *     DynamicSubGop?: 'ADAPTIVE'|'STATIC',
     *     EndOfStreamMarkers?: 'INCLUDE'|'SUPPRESS',
     *     FlickerAdaptiveQuantization?: 'DISABLED'|'ENABLED',
     *     FramerateControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED',
     *     FramerateConversionAlgorithm?: 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER',
     *     FramerateDenominator?: int<1, 2147483647>,
     *     FramerateNumerator?: int<1, 2147483647>,
     *     GopBReference?: 'DISABLED'|'ENABLED',
     *     GopClosedCadence?: int<0, 2147483647>,
     *     GopSize?: double,
     *     GopSizeUnits?: 'FRAMES'|'SECONDS'|'AUTO',
     *     HrdBufferFinalFillPercentage?: int<0, 100>,
     *     HrdBufferInitialFillPercentage?: int<0, 100>,
     *     HrdBufferSize?: int<0, 1466400000>,
     *     InterlaceMode?: 'PROGRESSIVE'|'TOP_FIELD'|'BOTTOM_FIELD'|'FOLLOW_TOP_FIELD'|'FOLLOW_BOTTOM_FIELD',
     *     MaxBitrate?: int<1000, 1466400000>,
     *     MinIInterval?: int<0, 30>,
     *     NumberBFramesBetweenReferenceFrames?: int<0, 7>,
     *     NumberReferenceFrames?: int<1, 6>,
     *     ParControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED',
     *     ParDenominator?: int<1, 2147483647>,
     *     ParNumerator?: int<1, 2147483647>,
     *     QualityTuningLevel?: 'SINGLE_PASS'|'SINGLE_PASS_HQ'|'MULTI_PASS_HQ',
     *     QvbrSettings?: H265QvbrSettings,
     *     RateControlMode?: 'VBR'|'CBR'|'QVBR',
     *     SampleAdaptiveOffsetFilterMode?: 'DEFAULT'|'ADAPTIVE'|'OFF',
     *     ScanTypeConversionMode?: 'INTERLACED'|'INTERLACED_OPTIMIZE',
     *     SceneChangeDetect?: 'DISABLED'|'ENABLED'|'TRANSITION_DETECTION',
     *     Slices?: int<1, 32>,
     *     SlowPal?: 'DISABLED'|'ENABLED',
     *     SpatialAdaptiveQuantization?: 'DISABLED'|'ENABLED',
     *     Telecine?: 'NONE'|'SOFT'|'HARD',
     *     TemporalAdaptiveQuantization?: 'DISABLED'|'ENABLED',
     *     TemporalIds?: 'DISABLED'|'ENABLED',
     *     Tiles?: 'DISABLED'|'ENABLED',
     *     UnregisteredSeiTimecode?: 'DISABLED'|'ENABLED',
     *     WriteMp4PackagingType?: 'HVC1'|'HEV1'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
