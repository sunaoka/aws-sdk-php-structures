<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTO'|'HIGH'|'HIGHER'|'LOW'|'MAX'|'MEDIUM'|'OFF'|null $AdaptiveQuantization
 * @property 'AUTO'|'FIXED'|'NONE'|null $AfdSignaling
 * @property 'INSERT'|'OMIT'|null $AlternativeTransferFunction
 * @property int|null $Bitrate
 * @property int|null $BufSize
 * @property 'IGNORE'|'INSERT'|null $ColorMetadata
 * @property H265ColorSpaceSettings|null $ColorSpaceSettings
 * @property H265FilterSettings|null $FilterSettings
 * @property 'AFD_0000'|'AFD_0010'|'AFD_0011'|'AFD_0100'|'AFD_1000'|'AFD_1001'|'AFD_1010'|'AFD_1011'|'AFD_1101'|'AFD_1110'|'AFD_1111'|null $FixedAfd
 * @property 'DISABLED'|'ENABLED'|null $FlickerAq
 * @property int $FramerateDenominator
 * @property int $FramerateNumerator
 * @property int|null $GopClosedCadence
 * @property double|null $GopSize
 * @property 'FRAMES'|'SECONDS'|null $GopSizeUnits
 * @property 'H265_LEVEL_1'|'H265_LEVEL_2'|'H265_LEVEL_2_1'|'H265_LEVEL_3'|'H265_LEVEL_3_1'|'H265_LEVEL_4'|'H265_LEVEL_4_1'|'H265_LEVEL_5'|'H265_LEVEL_5_1'|'H265_LEVEL_5_2'|'H265_LEVEL_6'|'H265_LEVEL_6_1'|'H265_LEVEL_6_2'|'H265_LEVEL_AUTO'|null $Level
 * @property 'HIGH'|'LOW'|'MEDIUM'|null $LookAheadRateControl
 * @property int|null $MaxBitrate
 * @property int|null $MinIInterval
 * @property int|null $ParDenominator
 * @property int|null $ParNumerator
 * @property 'MAIN'|'MAIN_10BIT'|null $Profile
 * @property int|null $QvbrQualityLevel
 * @property 'CBR'|'MULTIPLEX'|'QVBR'|null $RateControlMode
 * @property 'INTERLACED'|'PROGRESSIVE'|null $ScanType
 * @property 'DISABLED'|'ENABLED'|null $SceneChangeDetect
 * @property int|null $Slices
 * @property 'HIGH'|'MAIN'|null $Tier
 * @property 'DISABLED'|'PIC_TIMING_SEI'|null $TimecodeInsertion
 * @property TimecodeBurninSettings|null $TimecodeBurninSettings
 * @property 'DISABLED'|'ENABLED'|null $MvOverPictureBoundaries
 * @property 'DISABLED'|'ENABLED'|null $MvTemporalPredictor
 * @property int|null $TileHeight
 * @property 'NONE'|'PADDED'|null $TilePadding
 * @property int|null $TileWidth
 * @property 'AUTO'|'TREE_SIZE_32X32'|null $TreeblockSize
 * @property int|null $MinQp
 * @property 'DISABLED'|'ENABLED'|null $Deblocking
 * @property 'DISABLED'|'ENABLED'|null $GopBReference
 * @property int|null $GopNumBFrames
 * @property int|null $MinBitrate
 * @property 'DYNAMIC'|'FIXED'|null $SubgopLength
 */
class H265Settings extends Shape
{
    /**
     * @param array{
     *     AdaptiveQuantization?: 'AUTO'|'HIGH'|'HIGHER'|'LOW'|'MAX'|'MEDIUM'|'OFF'|null,
     *     AfdSignaling?: 'AUTO'|'FIXED'|'NONE'|null,
     *     AlternativeTransferFunction?: 'INSERT'|'OMIT'|null,
     *     Bitrate?: int|null,
     *     BufSize?: int|null,
     *     ColorMetadata?: 'IGNORE'|'INSERT'|null,
     *     ColorSpaceSettings?: H265ColorSpaceSettings|null,
     *     FilterSettings?: H265FilterSettings|null,
     *     FixedAfd?: 'AFD_0000'|'AFD_0010'|'AFD_0011'|'AFD_0100'|'AFD_1000'|'AFD_1001'|'AFD_1010'|'AFD_1011'|'AFD_1101'|'AFD_1110'|'AFD_1111'|null,
     *     FlickerAq?: 'DISABLED'|'ENABLED'|null,
     *     FramerateDenominator: int,
     *     FramerateNumerator: int,
     *     GopClosedCadence?: int|null,
     *     GopSize?: double|null,
     *     GopSizeUnits?: 'FRAMES'|'SECONDS'|null,
     *     Level?: 'H265_LEVEL_1'|'H265_LEVEL_2'|'H265_LEVEL_2_1'|'H265_LEVEL_3'|'H265_LEVEL_3_1'|'H265_LEVEL_4'|'H265_LEVEL_4_1'|'H265_LEVEL_5'|'H265_LEVEL_5_1'|'H265_LEVEL_5_2'|'H265_LEVEL_6'|'H265_LEVEL_6_1'|'H265_LEVEL_6_2'|'H265_LEVEL_AUTO'|null,
     *     LookAheadRateControl?: 'HIGH'|'LOW'|'MEDIUM'|null,
     *     MaxBitrate?: int|null,
     *     MinIInterval?: int|null,
     *     ParDenominator?: int|null,
     *     ParNumerator?: int|null,
     *     Profile?: 'MAIN'|'MAIN_10BIT'|null,
     *     QvbrQualityLevel?: int|null,
     *     RateControlMode?: 'CBR'|'MULTIPLEX'|'QVBR'|null,
     *     ScanType?: 'INTERLACED'|'PROGRESSIVE'|null,
     *     SceneChangeDetect?: 'DISABLED'|'ENABLED'|null,
     *     Slices?: int|null,
     *     Tier?: 'HIGH'|'MAIN'|null,
     *     TimecodeInsertion?: 'DISABLED'|'PIC_TIMING_SEI'|null,
     *     TimecodeBurninSettings?: TimecodeBurninSettings|null,
     *     MvOverPictureBoundaries?: 'DISABLED'|'ENABLED'|null,
     *     MvTemporalPredictor?: 'DISABLED'|'ENABLED'|null,
     *     TileHeight?: int|null,
     *     TilePadding?: 'NONE'|'PADDED'|null,
     *     TileWidth?: int|null,
     *     TreeblockSize?: 'AUTO'|'TREE_SIZE_32X32'|null,
     *     MinQp?: int|null,
     *     Deblocking?: 'DISABLED'|'ENABLED'|null,
     *     GopBReference?: 'DISABLED'|'ENABLED'|null,
     *     GopNumBFrames?: int|null,
     *     MinBitrate?: int|null,
     *     SubgopLength?: 'DYNAMIC'|'FIXED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
