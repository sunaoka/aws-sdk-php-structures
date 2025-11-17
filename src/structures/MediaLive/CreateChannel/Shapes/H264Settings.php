<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTO'|'HIGH'|'HIGHER'|'LOW'|'MAX'|'MEDIUM'|'OFF'|null $AdaptiveQuantization
 * @property 'AUTO'|'FIXED'|'NONE'|null $AfdSignaling
 * @property int|null $Bitrate
 * @property int|null $BufFillPct
 * @property int|null $BufSize
 * @property 'IGNORE'|'INSERT'|null $ColorMetadata
 * @property H264ColorSpaceSettings|null $ColorSpaceSettings
 * @property 'CABAC'|'CAVLC'|null $EntropyEncoding
 * @property H264FilterSettings|null $FilterSettings
 * @property 'AFD_0000'|'AFD_0010'|'AFD_0011'|'AFD_0100'|'AFD_1000'|'AFD_1001'|'AFD_1010'|'AFD_1011'|'AFD_1101'|'AFD_1110'|'AFD_1111'|null $FixedAfd
 * @property 'DISABLED'|'ENABLED'|null $FlickerAq
 * @property 'DISABLED'|'ENABLED'|null $ForceFieldPictures
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null $FramerateControl
 * @property int|null $FramerateDenominator
 * @property int|null $FramerateNumerator
 * @property 'DISABLED'|'ENABLED'|null $GopBReference
 * @property int|null $GopClosedCadence
 * @property int|null $GopNumBFrames
 * @property double|null $GopSize
 * @property 'FRAMES'|'SECONDS'|null $GopSizeUnits
 * @property 'H264_LEVEL_1'|'H264_LEVEL_1_1'|'H264_LEVEL_1_2'|'H264_LEVEL_1_3'|'H264_LEVEL_2'|'H264_LEVEL_2_1'|'H264_LEVEL_2_2'|'H264_LEVEL_3'|'H264_LEVEL_3_1'|'H264_LEVEL_3_2'|'H264_LEVEL_4'|'H264_LEVEL_4_1'|'H264_LEVEL_4_2'|'H264_LEVEL_5'|'H264_LEVEL_5_1'|'H264_LEVEL_5_2'|'H264_LEVEL_AUTO'|null $Level
 * @property 'HIGH'|'LOW'|'MEDIUM'|null $LookAheadRateControl
 * @property int|null $MaxBitrate
 * @property int|null $MinIInterval
 * @property int|null $NumRefFrames
 * @property 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null $ParControl
 * @property int|null $ParDenominator
 * @property int|null $ParNumerator
 * @property 'BASELINE'|'HIGH'|'HIGH_10BIT'|'HIGH_422'|'HIGH_422_10BIT'|'MAIN'|null $Profile
 * @property 'ENHANCED_QUALITY'|'STANDARD_QUALITY'|null $QualityLevel
 * @property int|null $QvbrQualityLevel
 * @property 'CBR'|'MULTIPLEX'|'QVBR'|'VBR'|null $RateControlMode
 * @property 'INTERLACED'|'PROGRESSIVE'|null $ScanType
 * @property 'DISABLED'|'ENABLED'|null $SceneChangeDetect
 * @property int|null $Slices
 * @property int|null $Softness
 * @property 'DISABLED'|'ENABLED'|null $SpatialAq
 * @property 'DYNAMIC'|'FIXED'|null $SubgopLength
 * @property 'DEFAULT'|'RP2027'|null $Syntax
 * @property 'DISABLED'|'ENABLED'|null $TemporalAq
 * @property 'DISABLED'|'PIC_TIMING_SEI'|null $TimecodeInsertion
 * @property TimecodeBurninSettings|null $TimecodeBurninSettings
 * @property int|null $MinQp
 * @property int|null $MinBitrate
 */
class H264Settings extends Shape
{
    /**
     * @param array{
     *     AdaptiveQuantization?: 'AUTO'|'HIGH'|'HIGHER'|'LOW'|'MAX'|'MEDIUM'|'OFF'|null,
     *     AfdSignaling?: 'AUTO'|'FIXED'|'NONE'|null,
     *     Bitrate?: int|null,
     *     BufFillPct?: int|null,
     *     BufSize?: int|null,
     *     ColorMetadata?: 'IGNORE'|'INSERT'|null,
     *     ColorSpaceSettings?: H264ColorSpaceSettings|null,
     *     EntropyEncoding?: 'CABAC'|'CAVLC'|null,
     *     FilterSettings?: H264FilterSettings|null,
     *     FixedAfd?: 'AFD_0000'|'AFD_0010'|'AFD_0011'|'AFD_0100'|'AFD_1000'|'AFD_1001'|'AFD_1010'|'AFD_1011'|'AFD_1101'|'AFD_1110'|'AFD_1111'|null,
     *     FlickerAq?: 'DISABLED'|'ENABLED'|null,
     *     ForceFieldPictures?: 'DISABLED'|'ENABLED'|null,
     *     FramerateControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null,
     *     FramerateDenominator?: int|null,
     *     FramerateNumerator?: int|null,
     *     GopBReference?: 'DISABLED'|'ENABLED'|null,
     *     GopClosedCadence?: int|null,
     *     GopNumBFrames?: int|null,
     *     GopSize?: double|null,
     *     GopSizeUnits?: 'FRAMES'|'SECONDS'|null,
     *     Level?: 'H264_LEVEL_1'|'H264_LEVEL_1_1'|'H264_LEVEL_1_2'|'H264_LEVEL_1_3'|'H264_LEVEL_2'|'H264_LEVEL_2_1'|'H264_LEVEL_2_2'|'H264_LEVEL_3'|'H264_LEVEL_3_1'|'H264_LEVEL_3_2'|'H264_LEVEL_4'|'H264_LEVEL_4_1'|'H264_LEVEL_4_2'|'H264_LEVEL_5'|'H264_LEVEL_5_1'|'H264_LEVEL_5_2'|'H264_LEVEL_AUTO'|null,
     *     LookAheadRateControl?: 'HIGH'|'LOW'|'MEDIUM'|null,
     *     MaxBitrate?: int|null,
     *     MinIInterval?: int|null,
     *     NumRefFrames?: int|null,
     *     ParControl?: 'INITIALIZE_FROM_SOURCE'|'SPECIFIED'|null,
     *     ParDenominator?: int|null,
     *     ParNumerator?: int|null,
     *     Profile?: 'BASELINE'|'HIGH'|'HIGH_10BIT'|'HIGH_422'|'HIGH_422_10BIT'|'MAIN'|null,
     *     QualityLevel?: 'ENHANCED_QUALITY'|'STANDARD_QUALITY'|null,
     *     QvbrQualityLevel?: int|null,
     *     RateControlMode?: 'CBR'|'MULTIPLEX'|'QVBR'|'VBR'|null,
     *     ScanType?: 'INTERLACED'|'PROGRESSIVE'|null,
     *     SceneChangeDetect?: 'DISABLED'|'ENABLED'|null,
     *     Slices?: int|null,
     *     Softness?: int|null,
     *     SpatialAq?: 'DISABLED'|'ENABLED'|null,
     *     SubgopLength?: 'DYNAMIC'|'FIXED'|null,
     *     Syntax?: 'DEFAULT'|'RP2027'|null,
     *     TemporalAq?: 'DISABLED'|'ENABLED'|null,
     *     TimecodeInsertion?: 'DISABLED'|'PIC_TIMING_SEI'|null,
     *     TimecodeBurninSettings?: TimecodeBurninSettings|null,
     *     MinQp?: int|null,
     *     MinBitrate?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
