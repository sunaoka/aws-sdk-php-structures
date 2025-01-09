<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OFF'|'LOW'|'MEDIUM'|'HIGH'|'HIGHER'|'MAX'|'AUTO' $AdaptiveQuantization
 * @property 'DISABLED'|'ENABLED' $AlternateTransferFunctionSei
 * @property BandwidthReductionFilter $BandwidthReductionFilter
 * @property int $Bitrate
 * @property 'AUTO'|'LEVEL_1'|'LEVEL_2'|'LEVEL_2_1'|'LEVEL_3'|'LEVEL_3_1'|'LEVEL_4'|'LEVEL_4_1'|'LEVEL_5'|'LEVEL_5_1'|'LEVEL_5_2'|'LEVEL_6'|'LEVEL_6_1'|'LEVEL_6_2' $CodecLevel
 * @property 'MAIN_MAIN'|'MAIN_HIGH'|'MAIN10_MAIN'|'MAIN10_HIGH'|'MAIN_422_8BIT_MAIN'|'MAIN_422_8BIT_HIGH'|'MAIN_422_10BIT_MAIN'|'MAIN_422_10BIT_HIGH' $CodecProfile
 * @property 'ADAPTIVE'|'STATIC' $DynamicSubGop
 * @property 'INCLUDE'|'SUPPRESS' $EndOfStreamMarkers
 * @property 'DISABLED'|'ENABLED' $FlickerAdaptiveQuantization
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED' $FramerateControl
 * @property 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER' $FramerateConversionAlgorithm
 * @property int $FramerateDenominator
 * @property int $FramerateNumerator
 * @property 'DISABLED'|'ENABLED' $GopBReference
 * @property int $GopClosedCadence
 * @property double $GopSize
 * @property 'FRAMES'|'SECONDS'|'AUTO' $GopSizeUnits
 * @property int $HrdBufferFinalFillPercentage
 * @property int $HrdBufferInitialFillPercentage
 * @property int $HrdBufferSize
 * @property 'PROGRESSIVE'|'TOP_FIELD'|'BOTTOM_FIELD'|'FOLLOW_TOP_FIELD'|'FOLLOW_BOTTOM_FIELD' $InterlaceMode
 * @property int $MaxBitrate
 * @property int $MinIInterval
 * @property int $NumberBFramesBetweenReferenceFrames
 * @property int $NumberReferenceFrames
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED' $ParControl
 * @property int $ParDenominator
 * @property int $ParNumerator
 * @property 'SINGLE_PASS'|'SINGLE_PASS_HQ'|'MULTI_PASS_HQ' $QualityTuningLevel
 * @property H265QvbrSettings $QvbrSettings
 * @property 'VBR'|'CBR'|'QVBR' $RateControlMode
 * @property 'DEFAULT'|'ADAPTIVE'|'OFF' $SampleAdaptiveOffsetFilterMode
 * @property 'INTERLACED'|'INTERLACED_OPTIMIZE' $ScanTypeConversionMode
 * @property 'DISABLED'|'ENABLED'|'TRANSITION_DETECTION' $SceneChangeDetect
 * @property int $Slices
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
     *     Bitrate?: int,
     *     CodecLevel?: 'AUTO'|'LEVEL_1'|'LEVEL_2'|'LEVEL_2_1'|'LEVEL_3'|'LEVEL_3_1'|'LEVEL_4'|'LEVEL_4_1'|'LEVEL_5'|'LEVEL_5_1'|'LEVEL_5_2'|'LEVEL_6'|'LEVEL_6_1'|'LEVEL_6_2',
     *     CodecProfile?: 'MAIN_MAIN'|'MAIN_HIGH'|'MAIN10_MAIN'|'MAIN10_HIGH'|'MAIN_422_8BIT_MAIN'|'MAIN_422_8BIT_HIGH'|'MAIN_422_10BIT_MAIN'|'MAIN_422_10BIT_HIGH',
     *     DynamicSubGop?: 'ADAPTIVE'|'STATIC',
     *     EndOfStreamMarkers?: 'INCLUDE'|'SUPPRESS',
     *     FlickerAdaptiveQuantization?: 'DISABLED'|'ENABLED',
     *     FramerateControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED',
     *     FramerateConversionAlgorithm?: 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER',
     *     FramerateDenominator?: int,
     *     FramerateNumerator?: int,
     *     GopBReference?: 'DISABLED'|'ENABLED',
     *     GopClosedCadence?: int,
     *     GopSize?: double,
     *     GopSizeUnits?: 'FRAMES'|'SECONDS'|'AUTO',
     *     HrdBufferFinalFillPercentage?: int,
     *     HrdBufferInitialFillPercentage?: int,
     *     HrdBufferSize?: int,
     *     InterlaceMode?: 'PROGRESSIVE'|'TOP_FIELD'|'BOTTOM_FIELD'|'FOLLOW_TOP_FIELD'|'FOLLOW_BOTTOM_FIELD',
     *     MaxBitrate?: int,
     *     MinIInterval?: int,
     *     NumberBFramesBetweenReferenceFrames?: int,
     *     NumberReferenceFrames?: int,
     *     ParControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED',
     *     ParDenominator?: int,
     *     ParNumerator?: int,
     *     QualityTuningLevel?: 'SINGLE_PASS'|'SINGLE_PASS_HQ'|'MULTI_PASS_HQ',
     *     QvbrSettings?: H265QvbrSettings,
     *     RateControlMode?: 'VBR'|'CBR'|'QVBR',
     *     SampleAdaptiveOffsetFilterMode?: 'DEFAULT'|'ADAPTIVE'|'OFF',
     *     ScanTypeConversionMode?: 'INTERLACED'|'INTERLACED_OPTIMIZE',
     *     SceneChangeDetect?: 'DISABLED'|'ENABLED'|'TRANSITION_DETECTION',
     *     Slices?: int,
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
