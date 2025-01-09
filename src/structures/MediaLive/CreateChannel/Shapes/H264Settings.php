<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTO'|'HIGH'|'HIGHER'|'LOW'|'MAX'|'MEDIUM'|'OFF' $AdaptiveQuantization
 * @property 'AUTO'|'FIXED'|'NONE' $AfdSignaling
 * @property int<1000, max> $Bitrate
 * @property int<0, 100> $BufFillPct
 * @property int<0, max> $BufSize
 * @property 'IGNORE'|'INSERT' $ColorMetadata
 * @property H264ColorSpaceSettings $ColorSpaceSettings
 * @property 'CABAC'|'CAVLC' $EntropyEncoding
 * @property H264FilterSettings $FilterSettings
 * @property 'AFD_0000'|'AFD_0010'|'AFD_0011'|'AFD_0100'|'AFD_1000'|'AFD_1001'|'AFD_1010'|'AFD_1011'|'AFD_1101'|'AFD_1110'|'AFD_1111' $FixedAfd
 * @property 'DISABLED'|'ENABLED' $FlickerAq
 * @property 'DISABLED'|'ENABLED' $ForceFieldPictures
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED' $FramerateControl
 * @property int<1, max> $FramerateDenominator
 * @property int<1, max> $FramerateNumerator
 * @property 'DISABLED'|'ENABLED' $GopBReference
 * @property int<0, max> $GopClosedCadence
 * @property int<0, 7> $GopNumBFrames
 * @property double $GopSize
 * @property 'FRAMES'|'SECONDS' $GopSizeUnits
 * @property 'H264_LEVEL_1'|'H264_LEVEL_1_1'|'H264_LEVEL_1_2'|'H264_LEVEL_1_3'|'H264_LEVEL_2'|'H264_LEVEL_2_1'|'H264_LEVEL_2_2'|'H264_LEVEL_3'|'H264_LEVEL_3_1'|'H264_LEVEL_3_2'|'H264_LEVEL_4'|'H264_LEVEL_4_1'|'H264_LEVEL_4_2'|'H264_LEVEL_5'|'H264_LEVEL_5_1'|'H264_LEVEL_5_2'|'H264_LEVEL_AUTO' $Level
 * @property 'HIGH'|'LOW'|'MEDIUM' $LookAheadRateControl
 * @property int<1000, max> $MaxBitrate
 * @property int<0, 30> $MinIInterval
 * @property int<1, 6> $NumRefFrames
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED' $ParControl
 * @property int<1, max> $ParDenominator
 * @property int<1, max> $ParNumerator
 * @property 'BASELINE'|'HIGH'|'HIGH_10BIT'|'HIGH_422'|'HIGH_422_10BIT'|'MAIN' $Profile
 * @property 'ENHANCED_QUALITY'|'STANDARD_QUALITY' $QualityLevel
 * @property int<1, 10> $QvbrQualityLevel
 * @property 'CBR'|'MULTIPLEX'|'QVBR'|'VBR' $RateControlMode
 * @property 'INTERLACED'|'PROGRESSIVE' $ScanType
 * @property 'DISABLED'|'ENABLED' $SceneChangeDetect
 * @property int<1, 32> $Slices
 * @property int<0, 128> $Softness
 * @property 'DISABLED'|'ENABLED' $SpatialAq
 * @property 'DYNAMIC'|'FIXED' $SubgopLength
 * @property 'DEFAULT'|'RP2027' $Syntax
 * @property 'DISABLED'|'ENABLED' $TemporalAq
 * @property 'DISABLED'|'PIC_TIMING_SEI' $TimecodeInsertion
 * @property TimecodeBurninSettings $TimecodeBurninSettings
 * @property int<1, 51> $MinQp
 */
class H264Settings extends Shape
{
    /**
     * @param array{
     *     AdaptiveQuantization?: 'AUTO'|'HIGH'|'HIGHER'|'LOW'|'MAX'|'MEDIUM'|'OFF',
     *     AfdSignaling?: 'AUTO'|'FIXED'|'NONE',
     *     Bitrate?: int<1000, max>,
     *     BufFillPct?: int<0, 100>,
     *     BufSize?: int<0, max>,
     *     ColorMetadata?: 'IGNORE'|'INSERT',
     *     ColorSpaceSettings?: H264ColorSpaceSettings,
     *     EntropyEncoding?: 'CABAC'|'CAVLC',
     *     FilterSettings?: H264FilterSettings,
     *     FixedAfd?: 'AFD_0000'|'AFD_0010'|'AFD_0011'|'AFD_0100'|'AFD_1000'|'AFD_1001'|'AFD_1010'|'AFD_1011'|'AFD_1101'|'AFD_1110'|'AFD_1111',
     *     FlickerAq?: 'DISABLED'|'ENABLED',
     *     ForceFieldPictures?: 'DISABLED'|'ENABLED',
     *     FramerateControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED',
     *     FramerateDenominator?: int<1, max>,
     *     FramerateNumerator?: int<1, max>,
     *     GopBReference?: 'DISABLED'|'ENABLED',
     *     GopClosedCadence?: int<0, max>,
     *     GopNumBFrames?: int<0, 7>,
     *     GopSize?: double,
     *     GopSizeUnits?: 'FRAMES'|'SECONDS',
     *     Level?: 'H264_LEVEL_1'|'H264_LEVEL_1_1'|'H264_LEVEL_1_2'|'H264_LEVEL_1_3'|'H264_LEVEL_2'|'H264_LEVEL_2_1'|'H264_LEVEL_2_2'|'H264_LEVEL_3'|'H264_LEVEL_3_1'|'H264_LEVEL_3_2'|'H264_LEVEL_4'|'H264_LEVEL_4_1'|'H264_LEVEL_4_2'|'H264_LEVEL_5'|'H264_LEVEL_5_1'|'H264_LEVEL_5_2'|'H264_LEVEL_AUTO',
     *     LookAheadRateControl?: 'HIGH'|'LOW'|'MEDIUM',
     *     MaxBitrate?: int<1000, max>,
     *     MinIInterval?: int<0, 30>,
     *     NumRefFrames?: int<1, 6>,
     *     ParControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED',
     *     ParDenominator?: int<1, max>,
     *     ParNumerator?: int<1, max>,
     *     Profile?: 'BASELINE'|'HIGH'|'HIGH_10BIT'|'HIGH_422'|'HIGH_422_10BIT'|'MAIN',
     *     QualityLevel?: 'ENHANCED_QUALITY'|'STANDARD_QUALITY',
     *     QvbrQualityLevel?: int<1, 10>,
     *     RateControlMode?: 'CBR'|'MULTIPLEX'|'QVBR'|'VBR',
     *     ScanType?: 'INTERLACED'|'PROGRESSIVE',
     *     SceneChangeDetect?: 'DISABLED'|'ENABLED',
     *     Slices?: int<1, 32>,
     *     Softness?: int<0, 128>,
     *     SpatialAq?: 'DISABLED'|'ENABLED',
     *     SubgopLength?: 'DYNAMIC'|'FIXED',
     *     Syntax?: 'DEFAULT'|'RP2027',
     *     TemporalAq?: 'DISABLED'|'ENABLED',
     *     TimecodeInsertion?: 'DISABLED'|'PIC_TIMING_SEI',
     *     TimecodeBurninSettings?: TimecodeBurninSettings,
     *     MinQp?: int<1, 51>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
