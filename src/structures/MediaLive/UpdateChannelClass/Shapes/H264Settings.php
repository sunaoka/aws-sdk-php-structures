<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTO'|'HIGH'|'HIGHER'|'LOW'|'MAX'|'MEDIUM'|'OFF'|null $AdaptiveQuantization
 * @property 'AUTO'|'FIXED'|'NONE'|null $AfdSignaling
 * @property int<1000, max>|null $Bitrate
 * @property int<0, 100>|null $BufFillPct
 * @property int<0, max>|null $BufSize
 * @property 'IGNORE'|'INSERT'|null $ColorMetadata
 * @property H264ColorSpaceSettings|null $ColorSpaceSettings
 * @property 'CABAC'|'CAVLC'|null $EntropyEncoding
 * @property H264FilterSettings|null $FilterSettings
 * @property 'AFD_0000'|'AFD_0010'|'AFD_0011'|'AFD_0100'|'AFD_1000'|'AFD_1001'|'AFD_1010'|'AFD_1011'|'AFD_1101'|'AFD_1110'|'AFD_1111'|null $FixedAfd
 * @property 'DISABLED'|'ENABLED'|null $FlickerAq
 * @property 'DISABLED'|'ENABLED'|null $ForceFieldPictures
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null $FramerateControl
 * @property int<1, max>|null $FramerateDenominator
 * @property int<1, max>|null $FramerateNumerator
 * @property 'DISABLED'|'ENABLED'|null $GopBReference
 * @property int<0, max>|null $GopClosedCadence
 * @property int<0, 7>|null $GopNumBFrames
 * @property double|null $GopSize
 * @property 'FRAMES'|'SECONDS'|null $GopSizeUnits
 * @property 'H264_LEVEL_1'|'H264_LEVEL_1_1'|'H264_LEVEL_1_2'|'H264_LEVEL_1_3'|'H264_LEVEL_2'|'H264_LEVEL_2_1'|'H264_LEVEL_2_2'|'H264_LEVEL_3'|'H264_LEVEL_3_1'|'H264_LEVEL_3_2'|'H264_LEVEL_4'|'H264_LEVEL_4_1'|'H264_LEVEL_4_2'|'H264_LEVEL_5'|'H264_LEVEL_5_1'|'H264_LEVEL_5_2'|'H264_LEVEL_AUTO'|null $Level
 * @property 'HIGH'|'LOW'|'MEDIUM'|null $LookAheadRateControl
 * @property int<1000, max>|null $MaxBitrate
 * @property int<0, 30>|null $MinIInterval
 * @property int<1, 6>|null $NumRefFrames
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null $ParControl
 * @property int<1, max>|null $ParDenominator
 * @property int<1, max>|null $ParNumerator
 * @property 'BASELINE'|'HIGH'|'HIGH_10BIT'|'HIGH_422'|'HIGH_422_10BIT'|'MAIN'|null $Profile
 * @property 'ENHANCED_QUALITY'|'STANDARD_QUALITY'|null $QualityLevel
 * @property int<1, 10>|null $QvbrQualityLevel
 * @property 'CBR'|'MULTIPLEX'|'QVBR'|'VBR'|null $RateControlMode
 * @property 'INTERLACED'|'PROGRESSIVE'|null $ScanType
 * @property 'DISABLED'|'ENABLED'|null $SceneChangeDetect
 * @property int<1, 32>|null $Slices
 * @property int<0, 128>|null $Softness
 * @property 'DISABLED'|'ENABLED'|null $SpatialAq
 * @property 'DYNAMIC'|'FIXED'|null $SubgopLength
 * @property 'DEFAULT'|'RP2027'|null $Syntax
 * @property 'DISABLED'|'ENABLED'|null $TemporalAq
 * @property 'DISABLED'|'PIC_TIMING_SEI'|null $TimecodeInsertion
 * @property TimecodeBurninSettings|null $TimecodeBurninSettings
 * @property int<1, 51>|null $MinQp
 */
class H264Settings extends Shape
{
    /**
     * @param array{
     *     AdaptiveQuantization?: 'AUTO'|'HIGH'|'HIGHER'|'LOW'|'MAX'|'MEDIUM'|'OFF'|null,
     *     AfdSignaling?: 'AUTO'|'FIXED'|'NONE'|null,
     *     Bitrate?: int<1000, max>|null,
     *     BufFillPct?: int<0, 100>|null,
     *     BufSize?: int<0, max>|null,
     *     ColorMetadata?: 'IGNORE'|'INSERT'|null,
     *     ColorSpaceSettings?: H264ColorSpaceSettings|null,
     *     EntropyEncoding?: 'CABAC'|'CAVLC'|null,
     *     FilterSettings?: H264FilterSettings|null,
     *     FixedAfd?: 'AFD_0000'|'AFD_0010'|'AFD_0011'|'AFD_0100'|'AFD_1000'|'AFD_1001'|'AFD_1010'|'AFD_1011'|'AFD_1101'|'AFD_1110'|'AFD_1111'|null,
     *     FlickerAq?: 'DISABLED'|'ENABLED'|null,
     *     ForceFieldPictures?: 'DISABLED'|'ENABLED'|null,
     *     FramerateControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null,
     *     FramerateDenominator?: int<1, max>|null,
     *     FramerateNumerator?: int<1, max>|null,
     *     GopBReference?: 'DISABLED'|'ENABLED'|null,
     *     GopClosedCadence?: int<0, max>|null,
     *     GopNumBFrames?: int<0, 7>|null,
     *     GopSize?: double|null,
     *     GopSizeUnits?: 'FRAMES'|'SECONDS'|null,
     *     Level?: 'H264_LEVEL_1'|'H264_LEVEL_1_1'|'H264_LEVEL_1_2'|'H264_LEVEL_1_3'|'H264_LEVEL_2'|'H264_LEVEL_2_1'|'H264_LEVEL_2_2'|'H264_LEVEL_3'|'H264_LEVEL_3_1'|'H264_LEVEL_3_2'|'H264_LEVEL_4'|'H264_LEVEL_4_1'|'H264_LEVEL_4_2'|'H264_LEVEL_5'|'H264_LEVEL_5_1'|'H264_LEVEL_5_2'|'H264_LEVEL_AUTO'|null,
     *     LookAheadRateControl?: 'HIGH'|'LOW'|'MEDIUM'|null,
     *     MaxBitrate?: int<1000, max>|null,
     *     MinIInterval?: int<0, 30>|null,
     *     NumRefFrames?: int<1, 6>|null,
     *     ParControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null,
     *     ParDenominator?: int<1, max>|null,
     *     ParNumerator?: int<1, max>|null,
     *     Profile?: 'BASELINE'|'HIGH'|'HIGH_10BIT'|'HIGH_422'|'HIGH_422_10BIT'|'MAIN'|null,
     *     QualityLevel?: 'ENHANCED_QUALITY'|'STANDARD_QUALITY'|null,
     *     QvbrQualityLevel?: int<1, 10>|null,
     *     RateControlMode?: 'CBR'|'MULTIPLEX'|'QVBR'|'VBR'|null,
     *     ScanType?: 'INTERLACED'|'PROGRESSIVE'|null,
     *     SceneChangeDetect?: 'DISABLED'|'ENABLED'|null,
     *     Slices?: int<1, 32>|null,
     *     Softness?: int<0, 128>|null,
     *     SpatialAq?: 'DISABLED'|'ENABLED'|null,
     *     SubgopLength?: 'DYNAMIC'|'FIXED'|null,
     *     Syntax?: 'DEFAULT'|'RP2027'|null,
     *     TemporalAq?: 'DISABLED'|'ENABLED'|null,
     *     TimecodeInsertion?: 'DISABLED'|'PIC_TIMING_SEI'|null,
     *     TimecodeBurninSettings?: TimecodeBurninSettings|null,
     *     MinQp?: int<1, 51>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
