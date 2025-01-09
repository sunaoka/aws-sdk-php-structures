<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTO'|'HIGH'|'HIGHER'|'LOW'|'MAX'|'MEDIUM'|'OFF' $AdaptiveQuantization
 * @property 'AUTO'|'FIXED'|'NONE' $AfdSignaling
 * @property int $Bitrate
 * @property int $BufFillPct
 * @property int $BufSize
 * @property 'IGNORE'|'INSERT' $ColorMetadata
 * @property H264ColorSpaceSettings $ColorSpaceSettings
 * @property 'CABAC'|'CAVLC' $EntropyEncoding
 * @property H264FilterSettings $FilterSettings
 * @property 'AFD_0000'|'AFD_0010'|'AFD_0011'|'AFD_0100'|'AFD_1000'|'AFD_1001'|'AFD_1010'|'AFD_1011'|'AFD_1101'|'AFD_1110'|'AFD_1111' $FixedAfd
 * @property 'DISABLED'|'ENABLED' $FlickerAq
 * @property 'DISABLED'|'ENABLED' $ForceFieldPictures
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED' $FramerateControl
 * @property int $FramerateDenominator
 * @property int $FramerateNumerator
 * @property 'DISABLED'|'ENABLED' $GopBReference
 * @property int $GopClosedCadence
 * @property int $GopNumBFrames
 * @property double $GopSize
 * @property 'FRAMES'|'SECONDS' $GopSizeUnits
 * @property 'H264_LEVEL_1'|'H264_LEVEL_1_1'|'H264_LEVEL_1_2'|'H264_LEVEL_1_3'|'H264_LEVEL_2'|'H264_LEVEL_2_1'|'H264_LEVEL_2_2'|'H264_LEVEL_3'|'H264_LEVEL_3_1'|'H264_LEVEL_3_2'|'H264_LEVEL_4'|'H264_LEVEL_4_1'|'H264_LEVEL_4_2'|'H264_LEVEL_5'|'H264_LEVEL_5_1'|'H264_LEVEL_5_2'|'H264_LEVEL_AUTO' $Level
 * @property 'HIGH'|'LOW'|'MEDIUM' $LookAheadRateControl
 * @property int $MaxBitrate
 * @property int $MinIInterval
 * @property int $NumRefFrames
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED' $ParControl
 * @property int $ParDenominator
 * @property int $ParNumerator
 * @property 'BASELINE'|'HIGH'|'HIGH_10BIT'|'HIGH_422'|'HIGH_422_10BIT'|'MAIN' $Profile
 * @property 'ENHANCED_QUALITY'|'STANDARD_QUALITY' $QualityLevel
 * @property int $QvbrQualityLevel
 * @property 'CBR'|'MULTIPLEX'|'QVBR'|'VBR' $RateControlMode
 * @property 'INTERLACED'|'PROGRESSIVE' $ScanType
 * @property 'DISABLED'|'ENABLED' $SceneChangeDetect
 * @property int $Slices
 * @property int $Softness
 * @property 'DISABLED'|'ENABLED' $SpatialAq
 * @property 'DYNAMIC'|'FIXED' $SubgopLength
 * @property 'DEFAULT'|'RP2027' $Syntax
 * @property 'DISABLED'|'ENABLED' $TemporalAq
 * @property 'DISABLED'|'PIC_TIMING_SEI' $TimecodeInsertion
 * @property TimecodeBurninSettings $TimecodeBurninSettings
 * @property int $MinQp
 */
class H264Settings extends Shape
{
    /**
     * @param array{
     *     AdaptiveQuantization?: 'AUTO'|'HIGH'|'HIGHER'|'LOW'|'MAX'|'MEDIUM'|'OFF',
     *     AfdSignaling?: 'AUTO'|'FIXED'|'NONE',
     *     Bitrate?: int,
     *     BufFillPct?: int,
     *     BufSize?: int,
     *     ColorMetadata?: 'IGNORE'|'INSERT',
     *     ColorSpaceSettings?: H264ColorSpaceSettings,
     *     EntropyEncoding?: 'CABAC'|'CAVLC',
     *     FilterSettings?: H264FilterSettings,
     *     FixedAfd?: 'AFD_0000'|'AFD_0010'|'AFD_0011'|'AFD_0100'|'AFD_1000'|'AFD_1001'|'AFD_1010'|'AFD_1011'|'AFD_1101'|'AFD_1110'|'AFD_1111',
     *     FlickerAq?: 'DISABLED'|'ENABLED',
     *     ForceFieldPictures?: 'DISABLED'|'ENABLED',
     *     FramerateControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED',
     *     FramerateDenominator?: int,
     *     FramerateNumerator?: int,
     *     GopBReference?: 'DISABLED'|'ENABLED',
     *     GopClosedCadence?: int,
     *     GopNumBFrames?: int,
     *     GopSize?: double,
     *     GopSizeUnits?: 'FRAMES'|'SECONDS',
     *     Level?: 'H264_LEVEL_1'|'H264_LEVEL_1_1'|'H264_LEVEL_1_2'|'H264_LEVEL_1_3'|'H264_LEVEL_2'|'H264_LEVEL_2_1'|'H264_LEVEL_2_2'|'H264_LEVEL_3'|'H264_LEVEL_3_1'|'H264_LEVEL_3_2'|'H264_LEVEL_4'|'H264_LEVEL_4_1'|'H264_LEVEL_4_2'|'H264_LEVEL_5'|'H264_LEVEL_5_1'|'H264_LEVEL_5_2'|'H264_LEVEL_AUTO',
     *     LookAheadRateControl?: 'HIGH'|'LOW'|'MEDIUM',
     *     MaxBitrate?: int,
     *     MinIInterval?: int,
     *     NumRefFrames?: int,
     *     ParControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED',
     *     ParDenominator?: int,
     *     ParNumerator?: int,
     *     Profile?: 'BASELINE'|'HIGH'|'HIGH_10BIT'|'HIGH_422'|'HIGH_422_10BIT'|'MAIN',
     *     QualityLevel?: 'ENHANCED_QUALITY'|'STANDARD_QUALITY',
     *     QvbrQualityLevel?: int,
     *     RateControlMode?: 'CBR'|'MULTIPLEX'|'QVBR'|'VBR',
     *     ScanType?: 'INTERLACED'|'PROGRESSIVE',
     *     SceneChangeDetect?: 'DISABLED'|'ENABLED',
     *     Slices?: int,
     *     Softness?: int,
     *     SpatialAq?: 'DISABLED'|'ENABLED',
     *     SubgopLength?: 'DYNAMIC'|'FIXED',
     *     Syntax?: 'DEFAULT'|'RP2027',
     *     TemporalAq?: 'DISABLED'|'ENABLED',
     *     TimecodeInsertion?: 'DISABLED'|'PIC_TIMING_SEI',
     *     TimecodeBurninSettings?: TimecodeBurninSettings,
     *     MinQp?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
