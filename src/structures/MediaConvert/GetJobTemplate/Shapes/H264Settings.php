<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OFF'|'AUTO'|'LOW'|'MEDIUM'|'HIGH'|'HIGHER'|'MAX' $AdaptiveQuantization
 * @property BandwidthReductionFilter $BandwidthReductionFilter
 * @property int $Bitrate
 * @property 'AUTO'|'LEVEL_1'|'LEVEL_1_1'|'LEVEL_1_2'|'LEVEL_1_3'|'LEVEL_2'|'LEVEL_2_1'|'LEVEL_2_2'|'LEVEL_3'|'LEVEL_3_1'|'LEVEL_3_2'|'LEVEL_4'|'LEVEL_4_1'|'LEVEL_4_2'|'LEVEL_5'|'LEVEL_5_1'|'LEVEL_5_2' $CodecLevel
 * @property 'BASELINE'|'HIGH'|'HIGH_10BIT'|'HIGH_422'|'HIGH_422_10BIT'|'MAIN' $CodecProfile
 * @property 'ADAPTIVE'|'STATIC' $DynamicSubGop
 * @property 'INCLUDE'|'SUPPRESS' $EndOfStreamMarkers
 * @property 'CABAC'|'CAVLC' $EntropyEncoding
 * @property 'PAFF'|'FORCE_FIELD'|'MBAFF' $FieldEncoding
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
 * @property H264QvbrSettings $QvbrSettings
 * @property 'VBR'|'CBR'|'QVBR' $RateControlMode
 * @property 'DISABLED'|'ENABLED' $RepeatPps
 * @property 'DISABLED'|'PREFERRED' $SaliencyAwareEncoding
 * @property 'INTERLACED'|'INTERLACED_OPTIMIZE' $ScanTypeConversionMode
 * @property 'DISABLED'|'ENABLED'|'TRANSITION_DETECTION' $SceneChangeDetect
 * @property int $Slices
 * @property 'DISABLED'|'ENABLED' $SlowPal
 * @property int $Softness
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
     *     Bitrate?: int,
     *     CodecLevel?: 'AUTO'|'LEVEL_1'|'LEVEL_1_1'|'LEVEL_1_2'|'LEVEL_1_3'|'LEVEL_2'|'LEVEL_2_1'|'LEVEL_2_2'|'LEVEL_3'|'LEVEL_3_1'|'LEVEL_3_2'|'LEVEL_4'|'LEVEL_4_1'|'LEVEL_4_2'|'LEVEL_5'|'LEVEL_5_1'|'LEVEL_5_2',
     *     CodecProfile?: 'BASELINE'|'HIGH'|'HIGH_10BIT'|'HIGH_422'|'HIGH_422_10BIT'|'MAIN',
     *     DynamicSubGop?: 'ADAPTIVE'|'STATIC',
     *     EndOfStreamMarkers?: 'INCLUDE'|'SUPPRESS',
     *     EntropyEncoding?: 'CABAC'|'CAVLC',
     *     FieldEncoding?: 'PAFF'|'FORCE_FIELD'|'MBAFF',
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
     *     QvbrSettings?: H264QvbrSettings,
     *     RateControlMode?: 'VBR'|'CBR'|'QVBR',
     *     RepeatPps?: 'DISABLED'|'ENABLED',
     *     SaliencyAwareEncoding?: 'DISABLED'|'PREFERRED',
     *     ScanTypeConversionMode?: 'INTERLACED'|'INTERLACED_OPTIMIZE',
     *     SceneChangeDetect?: 'DISABLED'|'ENABLED'|'TRANSITION_DETECTION',
     *     Slices?: int,
     *     SlowPal?: 'DISABLED'|'ENABLED',
     *     Softness?: int,
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
