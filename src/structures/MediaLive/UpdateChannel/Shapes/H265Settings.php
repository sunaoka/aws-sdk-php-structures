<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTO'|'HIGH'|'HIGHER'|'LOW'|'MAX'|'MEDIUM'|'OFF'|null $AdaptiveQuantization
 * @property 'AUTO'|'FIXED'|'NONE'|null $AfdSignaling
 * @property 'INSERT'|'OMIT'|null $AlternativeTransferFunction
 * @property int<100000, 40000000>|null $Bitrate
 * @property int<100000, 80000000>|null $BufSize
 * @property 'IGNORE'|'INSERT'|null $ColorMetadata
 * @property H265ColorSpaceSettings|null $ColorSpaceSettings
 * @property H265FilterSettings|null $FilterSettings
 * @property 'AFD_0000'|'AFD_0010'|'AFD_0011'|'AFD_0100'|'AFD_1000'|'AFD_1001'|'AFD_1010'|'AFD_1011'|'AFD_1101'|'AFD_1110'|'AFD_1111'|null $FixedAfd
 * @property 'DISABLED'|'ENABLED'|null $FlickerAq
 * @property int<1, 3003> $FramerateDenominator
 * @property int<1, max> $FramerateNumerator
 * @property int<0, max>|null $GopClosedCadence
 * @property double|null $GopSize
 * @property 'FRAMES'|'SECONDS'|null $GopSizeUnits
 * @property 'H265_LEVEL_1'|'H265_LEVEL_2'|'H265_LEVEL_2_1'|'H265_LEVEL_3'|'H265_LEVEL_3_1'|'H265_LEVEL_4'|'H265_LEVEL_4_1'|'H265_LEVEL_5'|'H265_LEVEL_5_1'|'H265_LEVEL_5_2'|'H265_LEVEL_6'|'H265_LEVEL_6_1'|'H265_LEVEL_6_2'|'H265_LEVEL_AUTO'|null $Level
 * @property 'HIGH'|'LOW'|'MEDIUM'|null $LookAheadRateControl
 * @property int<100000, 40000000>|null $MaxBitrate
 * @property int<0, 30>|null $MinIInterval
 * @property int<1, max>|null $ParDenominator
 * @property int<1, max>|null $ParNumerator
 * @property 'MAIN'|'MAIN_10BIT'|null $Profile
 * @property int<1, 10>|null $QvbrQualityLevel
 * @property 'CBR'|'MULTIPLEX'|'QVBR'|null $RateControlMode
 * @property 'INTERLACED'|'PROGRESSIVE'|null $ScanType
 * @property 'DISABLED'|'ENABLED'|null $SceneChangeDetect
 * @property int<1, 16>|null $Slices
 * @property 'HIGH'|'MAIN'|null $Tier
 * @property 'DISABLED'|'PIC_TIMING_SEI'|null $TimecodeInsertion
 * @property TimecodeBurninSettings|null $TimecodeBurninSettings
 * @property 'DISABLED'|'ENABLED'|null $MvOverPictureBoundaries
 * @property 'DISABLED'|'ENABLED'|null $MvTemporalPredictor
 * @property int<64, 2160>|null $TileHeight
 * @property 'NONE'|'PADDED'|null $TilePadding
 * @property int<256, 3840>|null $TileWidth
 * @property 'AUTO'|'TREE_SIZE_32X32'|null $TreeblockSize
 * @property int<1, 51>|null $MinQp
 * @property 'DISABLED'|'ENABLED'|null $Deblocking
 */
class H265Settings extends Shape
{
    /**
     * @param array{
     *     AdaptiveQuantization?: 'AUTO'|'HIGH'|'HIGHER'|'LOW'|'MAX'|'MEDIUM'|'OFF'|null,
     *     AfdSignaling?: 'AUTO'|'FIXED'|'NONE'|null,
     *     AlternativeTransferFunction?: 'INSERT'|'OMIT'|null,
     *     Bitrate?: int<100000, 40000000>|null,
     *     BufSize?: int<100000, 80000000>|null,
     *     ColorMetadata?: 'IGNORE'|'INSERT'|null,
     *     ColorSpaceSettings?: H265ColorSpaceSettings|null,
     *     FilterSettings?: H265FilterSettings|null,
     *     FixedAfd?: 'AFD_0000'|'AFD_0010'|'AFD_0011'|'AFD_0100'|'AFD_1000'|'AFD_1001'|'AFD_1010'|'AFD_1011'|'AFD_1101'|'AFD_1110'|'AFD_1111'|null,
     *     FlickerAq?: 'DISABLED'|'ENABLED'|null,
     *     FramerateDenominator: int<1, 3003>,
     *     FramerateNumerator: int<1, max>,
     *     GopClosedCadence?: int<0, max>|null,
     *     GopSize?: double|null,
     *     GopSizeUnits?: 'FRAMES'|'SECONDS'|null,
     *     Level?: 'H265_LEVEL_1'|'H265_LEVEL_2'|'H265_LEVEL_2_1'|'H265_LEVEL_3'|'H265_LEVEL_3_1'|'H265_LEVEL_4'|'H265_LEVEL_4_1'|'H265_LEVEL_5'|'H265_LEVEL_5_1'|'H265_LEVEL_5_2'|'H265_LEVEL_6'|'H265_LEVEL_6_1'|'H265_LEVEL_6_2'|'H265_LEVEL_AUTO'|null,
     *     LookAheadRateControl?: 'HIGH'|'LOW'|'MEDIUM'|null,
     *     MaxBitrate?: int<100000, 40000000>|null,
     *     MinIInterval?: int<0, 30>|null,
     *     ParDenominator?: int<1, max>|null,
     *     ParNumerator?: int<1, max>|null,
     *     Profile?: 'MAIN'|'MAIN_10BIT'|null,
     *     QvbrQualityLevel?: int<1, 10>|null,
     *     RateControlMode?: 'CBR'|'MULTIPLEX'|'QVBR'|null,
     *     ScanType?: 'INTERLACED'|'PROGRESSIVE'|null,
     *     SceneChangeDetect?: 'DISABLED'|'ENABLED'|null,
     *     Slices?: int<1, 16>|null,
     *     Tier?: 'HIGH'|'MAIN'|null,
     *     TimecodeInsertion?: 'DISABLED'|'PIC_TIMING_SEI'|null,
     *     TimecodeBurninSettings?: TimecodeBurninSettings|null,
     *     MvOverPictureBoundaries?: 'DISABLED'|'ENABLED'|null,
     *     MvTemporalPredictor?: 'DISABLED'|'ENABLED'|null,
     *     TileHeight?: int<64, 2160>|null,
     *     TilePadding?: 'NONE'|'PADDED'|null,
     *     TileWidth?: int<256, 3840>|null,
     *     TreeblockSize?: 'AUTO'|'TREE_SIZE_32X32'|null,
     *     MinQp?: int<1, 51>|null,
     *     Deblocking?: 'DISABLED'|'ENABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
