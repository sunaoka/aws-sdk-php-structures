<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OFF'|'AUTO'|'LOW'|'MEDIUM'|'HIGH'|'HIGHER'|'MAX' $AdaptiveQuantization
 * @property BandwidthReductionFilter $BandwidthReductionFilter
 * @property int<1000, 1152000000> $Bitrate
 * @property 'AUTO'|'LEVEL_1'|'LEVEL_1_1'|'LEVEL_1_2'|'LEVEL_1_3'|'LEVEL_2'|'LEVEL_2_1'|'LEVEL_2_2'|'LEVEL_3'|'LEVEL_3_1'|'LEVEL_3_2'|'LEVEL_4'|'LEVEL_4_1'|'LEVEL_4_2'|'LEVEL_5'|'LEVEL_5_1'|'LEVEL_5_2' $CodecLevel
 * @property 'BASELINE'|'HIGH'|'HIGH_10BIT'|'HIGH_422'|'HIGH_422_10BIT'|'MAIN' $CodecProfile
 * @property 'ADAPTIVE'|'STATIC' $DynamicSubGop
 * @property 'INCLUDE'|'SUPPRESS' $EndOfStreamMarkers
 * @property 'CABAC'|'CAVLC' $EntropyEncoding
 * @property 'PAFF'|'FORCE_FIELD'|'MBAFF' $FieldEncoding
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
 * @property int<0, 1152000000> $HrdBufferSize
 * @property 'PROGRESSIVE'|'TOP_FIELD'|'BOTTOM_FIELD'|'FOLLOW_TOP_FIELD'|'FOLLOW_BOTTOM_FIELD' $InterlaceMode
 * @property int<1000, 1152000000> $MaxBitrate
 * @property int<0, 30> $MinIInterval
 * @property int<0, 7> $NumberBFramesBetweenReferenceFrames
 * @property int<1, 6> $NumberReferenceFrames
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED' $ParControl
 * @property int<1, 2147483647> $ParDenominator
 * @property int<1, 2147483647> $ParNumerator
 * @property 'SINGLE_PASS'|'SINGLE_PASS_HQ'|'MULTI_PASS_HQ' $QualityTuningLevel
 * @property H264QvbrSettings $QvbrSettings
 * @property 'VBR'|'CBR'|'QVBR' $RateControlMode
 * @property 'DISABLED'|'ENABLED' $RepeatPps
 * @property 'DISABLED'|'PREFERRED' $SaliencyAwareEncoding
 * @property 'INTERLACED'|'INTERLACED_OPTIMIZE' $ScanTypeConversionMode
 * @property 'DISABLED'|'ENABLED'|'TRANSITION_DETECTION' $SceneChangeDetect
 * @property int<1, 32> $Slices
 * @property 'DISABLED'|'ENABLED' $SlowPal
 * @property int<0, 128> $Softness
 * @property 'DISABLED'|'ENABLED' $SpatialAdaptiveQuantization
 * @property 'DEFAULT'|'RP2027' $Syntax
 * @property 'NONE'|'SOFT'|'HARD' $Telecine
 * @property 'DISABLED'|'ENABLED' $TemporalAdaptiveQuantization
 * @property 'DISABLED'|'ENABLED' $UnregisteredSeiTimecode
 * @property 'AVC1'|'AVC3' $WriteMp4PackagingType
 */
class H264Settings extends Shape
{
    /**
     * @param array{
     *     AdaptiveQuantization?: 'OFF'|'AUTO'|'LOW'|'MEDIUM'|'HIGH'|'HIGHER'|'MAX',
     *     BandwidthReductionFilter?: BandwidthReductionFilter,
     *     Bitrate?: int<1000, 1152000000>,
     *     CodecLevel?: 'AUTO'|'LEVEL_1'|'LEVEL_1_1'|'LEVEL_1_2'|'LEVEL_1_3'|'LEVEL_2'|'LEVEL_2_1'|'LEVEL_2_2'|'LEVEL_3'|'LEVEL_3_1'|'LEVEL_3_2'|'LEVEL_4'|'LEVEL_4_1'|'LEVEL_4_2'|'LEVEL_5'|'LEVEL_5_1'|'LEVEL_5_2',
     *     CodecProfile?: 'BASELINE'|'HIGH'|'HIGH_10BIT'|'HIGH_422'|'HIGH_422_10BIT'|'MAIN',
     *     DynamicSubGop?: 'ADAPTIVE'|'STATIC',
     *     EndOfStreamMarkers?: 'INCLUDE'|'SUPPRESS',
     *     EntropyEncoding?: 'CABAC'|'CAVLC',
     *     FieldEncoding?: 'PAFF'|'FORCE_FIELD'|'MBAFF',
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
     *     HrdBufferSize?: int<0, 1152000000>,
     *     InterlaceMode?: 'PROGRESSIVE'|'TOP_FIELD'|'BOTTOM_FIELD'|'FOLLOW_TOP_FIELD'|'FOLLOW_BOTTOM_FIELD',
     *     MaxBitrate?: int<1000, 1152000000>,
     *     MinIInterval?: int<0, 30>,
     *     NumberBFramesBetweenReferenceFrames?: int<0, 7>,
     *     NumberReferenceFrames?: int<1, 6>,
     *     ParControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED',
     *     ParDenominator?: int<1, 2147483647>,
     *     ParNumerator?: int<1, 2147483647>,
     *     QualityTuningLevel?: 'SINGLE_PASS'|'SINGLE_PASS_HQ'|'MULTI_PASS_HQ',
     *     QvbrSettings?: H264QvbrSettings,
     *     RateControlMode?: 'VBR'|'CBR'|'QVBR',
     *     RepeatPps?: 'DISABLED'|'ENABLED',
     *     SaliencyAwareEncoding?: 'DISABLED'|'PREFERRED',
     *     ScanTypeConversionMode?: 'INTERLACED'|'INTERLACED_OPTIMIZE',
     *     SceneChangeDetect?: 'DISABLED'|'ENABLED'|'TRANSITION_DETECTION',
     *     Slices?: int<1, 32>,
     *     SlowPal?: 'DISABLED'|'ENABLED',
     *     Softness?: int<0, 128>,
     *     SpatialAdaptiveQuantization?: 'DISABLED'|'ENABLED',
     *     Syntax?: 'DEFAULT'|'RP2027',
     *     Telecine?: 'NONE'|'SOFT'|'HARD',
     *     TemporalAdaptiveQuantization?: 'DISABLED'|'ENABLED',
     *     UnregisteredSeiTimecode?: 'DISABLED'|'ENABLED',
     *     WriteMp4PackagingType?: 'AVC1'|'AVC3'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
