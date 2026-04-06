<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OFF'|'LOW'|'MEDIUM'|'HIGH'|'HIGHER'|'MAX'|'AUTO'|null $AdaptiveQuantization
 * @property 'DISABLED'|'ENABLED'|null $AlternateTransferFunctionSei
 * @property BandwidthReductionFilter|null $BandwidthReductionFilter
 * @property int<1000, 1466400000>|null $Bitrate
 * @property 'AUTO'|'LEVEL_1'|'LEVEL_2'|'LEVEL_2_1'|'LEVEL_3'|'LEVEL_3_1'|'LEVEL_4'|'LEVEL_4_1'|'LEVEL_5'|'LEVEL_5_1'|'LEVEL_5_2'|'LEVEL_6'|'LEVEL_6_1'|'LEVEL_6_2'|null $CodecLevel
 * @property 'MAIN_MAIN'|'MAIN_HIGH'|'MAIN10_MAIN'|'MAIN10_HIGH'|'MAIN_422_8BIT_MAIN'|'MAIN_422_8BIT_HIGH'|'MAIN_422_10BIT_MAIN'|'MAIN_422_10BIT_HIGH'|null $CodecProfile
 * @property 'ADAPTIVE'|'STATIC'|null $DynamicSubGop
 * @property 'INCLUDE'|'SUPPRESS'|null $EndOfStreamMarkers
 * @property 'DISABLED'|'ENABLED'|null $FlickerAdaptiveQuantization
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null $FramerateControl
 * @property 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER'|null $FramerateConversionAlgorithm
 * @property int<1, 2147483647>|null $FramerateDenominator
 * @property int<1, 2147483647>|null $FramerateNumerator
 * @property 'DISABLED'|'ENABLED'|null $GopBReference
 * @property int<0, 2147483647>|null $GopClosedCadence
 * @property double|null $GopSize
 * @property 'FRAMES'|'SECONDS'|'AUTO'|null $GopSizeUnits
 * @property int<0, 100>|null $HrdBufferFinalFillPercentage
 * @property int<0, 100>|null $HrdBufferInitialFillPercentage
 * @property int<0, 1466400000>|null $HrdBufferSize
 * @property 'PROGRESSIVE'|'TOP_FIELD'|'BOTTOM_FIELD'|'FOLLOW_TOP_FIELD'|'FOLLOW_BOTTOM_FIELD'|null $InterlaceMode
 * @property int<1000, 1466400000>|null $MaxBitrate
 * @property int<0, 30>|null $MinIInterval
 * @property int<0, 7>|null $NumberBFramesBetweenReferenceFrames
 * @property int<1, 6>|null $NumberReferenceFrames
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null $ParControl
 * @property int<1, 2147483647>|null $ParDenominator
 * @property int<1, 2147483647>|null $ParNumerator
 * @property 'SINGLE_PASS'|'SINGLE_PASS_HQ'|'MULTI_PASS_HQ'|null $QualityTuningLevel
 * @property H265QvbrSettings|null $QvbrSettings
 * @property 'VBR'|'CBR'|'QVBR'|null $RateControlMode
 * @property 'DEFAULT'|'ADAPTIVE'|'OFF'|null $SampleAdaptiveOffsetFilterMode
 * @property 'INTERLACED'|'INTERLACED_OPTIMIZE'|null $ScanTypeConversionMode
 * @property 'DISABLED'|'ENABLED'|'TRANSITION_DETECTION'|null $SceneChangeDetect
 * @property int<1, 32>|null $Slices
 * @property 'DISABLED'|'ENABLED'|null $SlowPal
 * @property 'DISABLED'|'ENABLED'|null $SpatialAdaptiveQuantization
 * @property 'NONE'|'SOFT'|'HARD'|null $Telecine
 * @property 'DISABLED'|'ENABLED'|null $TemporalAdaptiveQuantization
 * @property 'DISABLED'|'ENABLED'|null $TemporalIds
 * @property 'DISABLED'|'ENABLED'|null $Tiles
 * @property 'DISABLED'|'ENABLED'|null $UnregisteredSeiTimecode
 * @property 'HVC1'|'HEV1'|null $WriteMp4PackagingType
 */
class H265Settings extends Shape
{
    /**
     * @param array{
     *     AdaptiveQuantization?: 'OFF'|'LOW'|'MEDIUM'|'HIGH'|'HIGHER'|'MAX'|'AUTO'|null,
     *     AlternateTransferFunctionSei?: 'DISABLED'|'ENABLED'|null,
     *     BandwidthReductionFilter?: BandwidthReductionFilter|null,
     *     Bitrate?: int<1000, 1466400000>|null,
     *     CodecLevel?: 'AUTO'|'LEVEL_1'|'LEVEL_2'|'LEVEL_2_1'|'LEVEL_3'|'LEVEL_3_1'|'LEVEL_4'|'LEVEL_4_1'|'LEVEL_5'|'LEVEL_5_1'|'LEVEL_5_2'|'LEVEL_6'|'LEVEL_6_1'|'LEVEL_6_2'|null,
     *     CodecProfile?: 'MAIN_MAIN'|'MAIN_HIGH'|'MAIN10_MAIN'|'MAIN10_HIGH'|'MAIN_422_8BIT_MAIN'|'MAIN_422_8BIT_HIGH'|'MAIN_422_10BIT_MAIN'|'MAIN_422_10BIT_HIGH'|null,
     *     DynamicSubGop?: 'ADAPTIVE'|'STATIC'|null,
     *     EndOfStreamMarkers?: 'INCLUDE'|'SUPPRESS'|null,
     *     FlickerAdaptiveQuantization?: 'DISABLED'|'ENABLED'|null,
     *     FramerateControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null,
     *     FramerateConversionAlgorithm?: 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER'|null,
     *     FramerateDenominator?: int<1, 2147483647>|null,
     *     FramerateNumerator?: int<1, 2147483647>|null,
     *     GopBReference?: 'DISABLED'|'ENABLED'|null,
     *     GopClosedCadence?: int<0, 2147483647>|null,
     *     GopSize?: double|null,
     *     GopSizeUnits?: 'FRAMES'|'SECONDS'|'AUTO'|null,
     *     HrdBufferFinalFillPercentage?: int<0, 100>|null,
     *     HrdBufferInitialFillPercentage?: int<0, 100>|null,
     *     HrdBufferSize?: int<0, 1466400000>|null,
     *     InterlaceMode?: 'PROGRESSIVE'|'TOP_FIELD'|'BOTTOM_FIELD'|'FOLLOW_TOP_FIELD'|'FOLLOW_BOTTOM_FIELD'|null,
     *     MaxBitrate?: int<1000, 1466400000>|null,
     *     MinIInterval?: int<0, 30>|null,
     *     NumberBFramesBetweenReferenceFrames?: int<0, 7>|null,
     *     NumberReferenceFrames?: int<1, 6>|null,
     *     ParControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null,
     *     ParDenominator?: int<1, 2147483647>|null,
     *     ParNumerator?: int<1, 2147483647>|null,
     *     QualityTuningLevel?: 'SINGLE_PASS'|'SINGLE_PASS_HQ'|'MULTI_PASS_HQ'|null,
     *     QvbrSettings?: H265QvbrSettings|null,
     *     RateControlMode?: 'VBR'|'CBR'|'QVBR'|null,
     *     SampleAdaptiveOffsetFilterMode?: 'DEFAULT'|'ADAPTIVE'|'OFF'|null,
     *     ScanTypeConversionMode?: 'INTERLACED'|'INTERLACED_OPTIMIZE'|null,
     *     SceneChangeDetect?: 'DISABLED'|'ENABLED'|'TRANSITION_DETECTION'|null,
     *     Slices?: int<1, 32>|null,
     *     SlowPal?: 'DISABLED'|'ENABLED'|null,
     *     SpatialAdaptiveQuantization?: 'DISABLED'|'ENABLED'|null,
     *     Telecine?: 'NONE'|'SOFT'|'HARD'|null,
     *     TemporalAdaptiveQuantization?: 'DISABLED'|'ENABLED'|null,
     *     TemporalIds?: 'DISABLED'|'ENABLED'|null,
     *     Tiles?: 'DISABLED'|'ENABLED'|null,
     *     UnregisteredSeiTimecode?: 'DISABLED'|'ENABLED'|null,
     *     WriteMp4PackagingType?: 'HVC1'|'HEV1'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
