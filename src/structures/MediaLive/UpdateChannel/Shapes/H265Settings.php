<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTO'|'HIGH'|'HIGHER'|'LOW'|'MAX'|'MEDIUM'|'OFF' $AdaptiveQuantization
 * @property 'AUTO'|'FIXED'|'NONE' $AfdSignaling
 * @property 'INSERT'|'OMIT' $AlternativeTransferFunction
 * @property int $Bitrate
 * @property int $BufSize
 * @property 'IGNORE'|'INSERT' $ColorMetadata
 * @property H265ColorSpaceSettings $ColorSpaceSettings
 * @property H265FilterSettings $FilterSettings
 * @property 'AFD_0000'|'AFD_0010'|'AFD_0011'|'AFD_0100'|'AFD_1000'|'AFD_1001'|'AFD_1010'|'AFD_1011'|'AFD_1101'|'AFD_1110'|'AFD_1111' $FixedAfd
 * @property 'DISABLED'|'ENABLED' $FlickerAq
 * @property int $FramerateDenominator
 * @property int $FramerateNumerator
 * @property int $GopClosedCadence
 * @property double $GopSize
 * @property 'FRAMES'|'SECONDS' $GopSizeUnits
 * @property 'H265_LEVEL_1'|'H265_LEVEL_2'|'H265_LEVEL_2_1'|'H265_LEVEL_3'|'H265_LEVEL_3_1'|'H265_LEVEL_4'|'H265_LEVEL_4_1'|'H265_LEVEL_5'|'H265_LEVEL_5_1'|'H265_LEVEL_5_2'|'H265_LEVEL_6'|'H265_LEVEL_6_1'|'H265_LEVEL_6_2'|'H265_LEVEL_AUTO' $Level
 * @property 'HIGH'|'LOW'|'MEDIUM' $LookAheadRateControl
 * @property int $MaxBitrate
 * @property int $MinIInterval
 * @property int $ParDenominator
 * @property int $ParNumerator
 * @property 'MAIN'|'MAIN_10BIT' $Profile
 * @property int $QvbrQualityLevel
 * @property 'CBR'|'MULTIPLEX'|'QVBR' $RateControlMode
 * @property 'INTERLACED'|'PROGRESSIVE' $ScanType
 * @property 'DISABLED'|'ENABLED' $SceneChangeDetect
 * @property int $Slices
 * @property 'HIGH'|'MAIN' $Tier
 * @property 'DISABLED'|'PIC_TIMING_SEI' $TimecodeInsertion
 * @property TimecodeBurninSettings $TimecodeBurninSettings
 * @property 'DISABLED'|'ENABLED' $MvOverPictureBoundaries
 * @property 'DISABLED'|'ENABLED' $MvTemporalPredictor
 * @property int $TileHeight
 * @property 'NONE'|'PADDED' $TilePadding
 * @property int $TileWidth
 * @property 'AUTO'|'TREE_SIZE_32X32' $TreeblockSize
 * @property int $MinQp
 * @property 'DISABLED'|'ENABLED' $Deblocking
 */
class H265Settings extends Shape
{
    /**
     * @param array{
     *     AdaptiveQuantization?: 'AUTO'|'HIGH'|'HIGHER'|'LOW'|'MAX'|'MEDIUM'|'OFF',
     *     AfdSignaling?: 'AUTO'|'FIXED'|'NONE',
     *     AlternativeTransferFunction?: 'INSERT'|'OMIT',
     *     Bitrate?: int,
     *     BufSize?: int,
     *     ColorMetadata?: 'IGNORE'|'INSERT',
     *     ColorSpaceSettings?: H265ColorSpaceSettings,
     *     FilterSettings?: H265FilterSettings,
     *     FixedAfd?: 'AFD_0000'|'AFD_0010'|'AFD_0011'|'AFD_0100'|'AFD_1000'|'AFD_1001'|'AFD_1010'|'AFD_1011'|'AFD_1101'|'AFD_1110'|'AFD_1111',
     *     FlickerAq?: 'DISABLED'|'ENABLED',
     *     FramerateDenominator: int,
     *     FramerateNumerator: int,
     *     GopClosedCadence?: int,
     *     GopSize?: double,
     *     GopSizeUnits?: 'FRAMES'|'SECONDS',
     *     Level?: 'H265_LEVEL_1'|'H265_LEVEL_2'|'H265_LEVEL_2_1'|'H265_LEVEL_3'|'H265_LEVEL_3_1'|'H265_LEVEL_4'|'H265_LEVEL_4_1'|'H265_LEVEL_5'|'H265_LEVEL_5_1'|'H265_LEVEL_5_2'|'H265_LEVEL_6'|'H265_LEVEL_6_1'|'H265_LEVEL_6_2'|'H265_LEVEL_AUTO',
     *     LookAheadRateControl?: 'HIGH'|'LOW'|'MEDIUM',
     *     MaxBitrate?: int,
     *     MinIInterval?: int,
     *     ParDenominator?: int,
     *     ParNumerator?: int,
     *     Profile?: 'MAIN'|'MAIN_10BIT',
     *     QvbrQualityLevel?: int,
     *     RateControlMode?: 'CBR'|'MULTIPLEX'|'QVBR',
     *     ScanType?: 'INTERLACED'|'PROGRESSIVE',
     *     SceneChangeDetect?: 'DISABLED'|'ENABLED',
     *     Slices?: int,
     *     Tier?: 'HIGH'|'MAIN',
     *     TimecodeInsertion?: 'DISABLED'|'PIC_TIMING_SEI',
     *     TimecodeBurninSettings?: TimecodeBurninSettings,
     *     MvOverPictureBoundaries?: 'DISABLED'|'ENABLED',
     *     MvTemporalPredictor?: 'DISABLED'|'ENABLED',
     *     TileHeight?: int,
     *     TilePadding?: 'NONE'|'PADDED',
     *     TileWidth?: int,
     *     TreeblockSize?: 'AUTO'|'TREE_SIZE_32X32',
     *     MinQp?: int,
     *     Deblocking?: 'DISABLED'|'ENABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
