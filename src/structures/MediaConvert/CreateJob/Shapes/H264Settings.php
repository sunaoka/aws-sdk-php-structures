<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OFF'|'AUTO'|'LOW'|'MEDIUM'|'HIGH'|'HIGHER'|'MAX'|null $AdaptiveQuantization
 * @property BandwidthReductionFilter|null $BandwidthReductionFilter
 * @property int<1000, 1152000000>|null $Bitrate
 * @property 'AUTO'|'LEVEL_1'|'LEVEL_1_1'|'LEVEL_1_2'|'LEVEL_1_3'|'LEVEL_2'|'LEVEL_2_1'|'LEVEL_2_2'|'LEVEL_3'|'LEVEL_3_1'|'LEVEL_3_2'|'LEVEL_4'|'LEVEL_4_1'|'LEVEL_4_2'|'LEVEL_5'|'LEVEL_5_1'|'LEVEL_5_2'|null $CodecLevel
 * @property 'BASELINE'|'HIGH'|'HIGH_10BIT'|'HIGH_422'|'HIGH_422_10BIT'|'MAIN'|null $CodecProfile
 * @property 'ADAPTIVE'|'STATIC'|null $DynamicSubGop
 * @property 'INCLUDE'|'SUPPRESS'|null $EndOfStreamMarkers
 * @property 'CABAC'|'CAVLC'|null $EntropyEncoding
 * @property 'PAFF'|'FORCE_FIELD'|'MBAFF'|null $FieldEncoding
 * @property 'DISABLED'|'ENABLED'|null $FlickerAdaptiveQuantization
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null $FramerateControl
 * @property 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER'|'MAINTAIN_FRAME_COUNT'|null $FramerateConversionAlgorithm
 * @property int<1, 2147483647>|null $FramerateDenominator
 * @property int<1, 2147483647>|null $FramerateNumerator
 * @property 'DISABLED'|'ENABLED'|null $GopBReference
 * @property int<0, 2147483647>|null $GopClosedCadence
 * @property double|null $GopSize
 * @property 'FRAMES'|'SECONDS'|'AUTO'|null $GopSizeUnits
 * @property int<0, 100>|null $HrdBufferFinalFillPercentage
 * @property int<0, 100>|null $HrdBufferInitialFillPercentage
 * @property int<0, 1152000000>|null $HrdBufferSize
 * @property 'PROGRESSIVE'|'TOP_FIELD'|'BOTTOM_FIELD'|'FOLLOW_TOP_FIELD'|'FOLLOW_BOTTOM_FIELD'|null $InterlaceMode
 * @property int<1000, 1152000000>|null $MaxBitrate
 * @property int<0, 30>|null $MinIInterval
 * @property int<0, 7>|null $NumberBFramesBetweenReferenceFrames
 * @property int<1, 6>|null $NumberReferenceFrames
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null $ParControl
 * @property int<1, 2147483647>|null $ParDenominator
 * @property int<1, 2147483647>|null $ParNumerator
 * @property list<'PSNR'|'SSIM'|'MS_SSIM'|'PSNR_HVS'|'VMAF'|'QVBR'|'SHOT_CHANGE'>|null $PerFrameMetrics
 * @property 'SINGLE_PASS'|'SINGLE_PASS_HQ'|'MULTI_PASS_HQ'|null $QualityTuningLevel
 * @property H264QvbrSettings|null $QvbrSettings
 * @property 'VBR'|'CBR'|'QVBR'|null $RateControlMode
 * @property 'DISABLED'|'ENABLED'|null $RepeatPps
 * @property 'DISABLED'|'PREFERRED'|null $SaliencyAwareEncoding
 * @property 'INTERLACED'|'INTERLACED_OPTIMIZE'|null $ScanTypeConversionMode
 * @property 'DISABLED'|'ENABLED'|'TRANSITION_DETECTION'|null $SceneChangeDetect
 * @property int<1, 32>|null $Slices
 * @property 'DISABLED'|'ENABLED'|null $SlowPal
 * @property int<0, 128>|null $Softness
 * @property 'DISABLED'|'ENABLED'|null $SpatialAdaptiveQuantization
 * @property 'DEFAULT'|'RP2027'|null $Syntax
 * @property 'NONE'|'SOFT'|'HARD'|null $Telecine
 * @property 'DISABLED'|'ENABLED'|null $TemporalAdaptiveQuantization
 * @property 'DISABLED'|'ENABLED'|null $UnregisteredSeiTimecode
 * @property 'AVC1'|'AVC3'|null $WriteMp4PackagingType
 */
class H264Settings extends Shape
{
    /**
     * @param array{
     *     AdaptiveQuantization?: 'OFF'|'AUTO'|'LOW'|'MEDIUM'|'HIGH'|'HIGHER'|'MAX'|null,
     *     BandwidthReductionFilter?: BandwidthReductionFilter|null,
     *     Bitrate?: int<1000, 1152000000>|null,
     *     CodecLevel?: 'AUTO'|'LEVEL_1'|'LEVEL_1_1'|'LEVEL_1_2'|'LEVEL_1_3'|'LEVEL_2'|'LEVEL_2_1'|'LEVEL_2_2'|'LEVEL_3'|'LEVEL_3_1'|'LEVEL_3_2'|'LEVEL_4'|'LEVEL_4_1'|'LEVEL_4_2'|'LEVEL_5'|'LEVEL_5_1'|'LEVEL_5_2'|null,
     *     CodecProfile?: 'BASELINE'|'HIGH'|'HIGH_10BIT'|'HIGH_422'|'HIGH_422_10BIT'|'MAIN'|null,
     *     DynamicSubGop?: 'ADAPTIVE'|'STATIC'|null,
     *     EndOfStreamMarkers?: 'INCLUDE'|'SUPPRESS'|null,
     *     EntropyEncoding?: 'CABAC'|'CAVLC'|null,
     *     FieldEncoding?: 'PAFF'|'FORCE_FIELD'|'MBAFF'|null,
     *     FlickerAdaptiveQuantization?: 'DISABLED'|'ENABLED'|null,
     *     FramerateControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null,
     *     FramerateConversionAlgorithm?: 'DUPLICATE_DROP'|'INTERPOLATE'|'FRAMEFORMER'|'MAINTAIN_FRAME_COUNT'|null,
     *     FramerateDenominator?: int<1, 2147483647>|null,
     *     FramerateNumerator?: int<1, 2147483647>|null,
     *     GopBReference?: 'DISABLED'|'ENABLED'|null,
     *     GopClosedCadence?: int<0, 2147483647>|null,
     *     GopSize?: double|null,
     *     GopSizeUnits?: 'FRAMES'|'SECONDS'|'AUTO'|null,
     *     HrdBufferFinalFillPercentage?: int<0, 100>|null,
     *     HrdBufferInitialFillPercentage?: int<0, 100>|null,
     *     HrdBufferSize?: int<0, 1152000000>|null,
     *     InterlaceMode?: 'PROGRESSIVE'|'TOP_FIELD'|'BOTTOM_FIELD'|'FOLLOW_TOP_FIELD'|'FOLLOW_BOTTOM_FIELD'|null,
     *     MaxBitrate?: int<1000, 1152000000>|null,
     *     MinIInterval?: int<0, 30>|null,
     *     NumberBFramesBetweenReferenceFrames?: int<0, 7>|null,
     *     NumberReferenceFrames?: int<1, 6>|null,
     *     ParControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null,
     *     ParDenominator?: int<1, 2147483647>|null,
     *     ParNumerator?: int<1, 2147483647>|null,
     *     PerFrameMetrics?: list<'PSNR'|'SSIM'|'MS_SSIM'|'PSNR_HVS'|'VMAF'|'QVBR'|'SHOT_CHANGE'>|null,
     *     QualityTuningLevel?: 'SINGLE_PASS'|'SINGLE_PASS_HQ'|'MULTI_PASS_HQ'|null,
     *     QvbrSettings?: H264QvbrSettings|null,
     *     RateControlMode?: 'VBR'|'CBR'|'QVBR'|null,
     *     RepeatPps?: 'DISABLED'|'ENABLED'|null,
     *     SaliencyAwareEncoding?: 'DISABLED'|'PREFERRED'|null,
     *     ScanTypeConversionMode?: 'INTERLACED'|'INTERLACED_OPTIMIZE'|null,
     *     SceneChangeDetect?: 'DISABLED'|'ENABLED'|'TRANSITION_DETECTION'|null,
     *     Slices?: int<1, 32>|null,
     *     SlowPal?: 'DISABLED'|'ENABLED'|null,
     *     Softness?: int<0, 128>|null,
     *     SpatialAdaptiveQuantization?: 'DISABLED'|'ENABLED'|null,
     *     Syntax?: 'DEFAULT'|'RP2027'|null,
     *     Telecine?: 'NONE'|'SOFT'|'HARD'|null,
     *     TemporalAdaptiveQuantization?: 'DISABLED'|'ENABLED'|null,
     *     UnregisteredSeiTimecode?: 'DISABLED'|'ENABLED'|null,
     *     WriteMp4PackagingType?: 'AVC1'|'AVC3'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
