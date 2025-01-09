<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTO'|'HIGH'|'HIGHER'|'LOW'|'MAX'|'MEDIUM'|'OFF' $AdaptiveQuantization
 * @property 'AUTO'|'FIXED'|'NONE' $AfdSignaling
 * @property 'INSERT'|'OMIT' $AlternativeTransferFunction
 * @property int<100000, 40000000> $Bitrate
 * @property int<100000, 80000000> $BufSize
 * @property 'IGNORE'|'INSERT' $ColorMetadata
 * @property H265ColorSpaceSettings $ColorSpaceSettings
 * @property H265FilterSettings $FilterSettings
 * @property 'AFD_0000'|'AFD_0010'|'AFD_0011'|'AFD_0100'|'AFD_1000'|'AFD_1001'|'AFD_1010'|'AFD_1011'|'AFD_1101'|'AFD_1110'|'AFD_1111' $FixedAfd
 * @property 'DISABLED'|'ENABLED' $FlickerAq
 * @property int<1, 3003> $FramerateDenominator
 * @property int<1, max> $FramerateNumerator
 * @property int<0, max> $GopClosedCadence
 * @property double $GopSize
 * @property 'FRAMES'|'SECONDS' $GopSizeUnits
 * @property 'H265_LEVEL_1'|'H265_LEVEL_2'|'H265_LEVEL_2_1'|'H265_LEVEL_3'|'H265_LEVEL_3_1'|'H265_LEVEL_4'|'H265_LEVEL_4_1'|'H265_LEVEL_5'|'H265_LEVEL_5_1'|'H265_LEVEL_5_2'|'H265_LEVEL_6'|'H265_LEVEL_6_1'|'H265_LEVEL_6_2'|'H265_LEVEL_AUTO' $Level
 * @property 'HIGH'|'LOW'|'MEDIUM' $LookAheadRateControl
 * @property int<100000, 40000000> $MaxBitrate
 * @property int<0, 30> $MinIInterval
 * @property int<1, max> $ParDenominator
 * @property int<1, max> $ParNumerator
 * @property 'MAIN'|'MAIN_10BIT' $Profile
 * @property int<1, 10> $QvbrQualityLevel
 * @property 'CBR'|'MULTIPLEX'|'QVBR' $RateControlMode
 * @property 'INTERLACED'|'PROGRESSIVE' $ScanType
 * @property 'DISABLED'|'ENABLED' $SceneChangeDetect
 * @property int<1, 16> $Slices
 * @property 'HIGH'|'MAIN' $Tier
 * @property 'DISABLED'|'PIC_TIMING_SEI' $TimecodeInsertion
 * @property TimecodeBurninSettings $TimecodeBurninSettings
 * @property 'DISABLED'|'ENABLED' $MvOverPictureBoundaries
 * @property 'DISABLED'|'ENABLED' $MvTemporalPredictor
 * @property int<64, 2160> $TileHeight
 * @property 'NONE'|'PADDED' $TilePadding
 * @property int<256, 3840> $TileWidth
 * @property 'AUTO'|'TREE_SIZE_32X32' $TreeblockSize
 * @property int<1, 51> $MinQp
 * @property 'DISABLED'|'ENABLED' $Deblocking
 */
class H265Settings extends Shape
{
    /**
     * @param array{
     *     AdaptiveQuantization?: 'AUTO'|'HIGH'|'HIGHER'|'LOW'|'MAX'|'MEDIUM'|'OFF',
     *     AfdSignaling?: 'AUTO'|'FIXED'|'NONE',
     *     AlternativeTransferFunction?: 'INSERT'|'OMIT',
     *     Bitrate?: int<100000, 40000000>,
     *     BufSize?: int<100000, 80000000>,
     *     ColorMetadata?: 'IGNORE'|'INSERT',
     *     ColorSpaceSettings?: H265ColorSpaceSettings,
     *     FilterSettings?: H265FilterSettings,
     *     FixedAfd?: 'AFD_0000'|'AFD_0010'|'AFD_0011'|'AFD_0100'|'AFD_1000'|'AFD_1001'|'AFD_1010'|'AFD_1011'|'AFD_1101'|'AFD_1110'|'AFD_1111',
     *     FlickerAq?: 'DISABLED'|'ENABLED',
     *     FramerateDenominator: int<1, 3003>,
     *     FramerateNumerator: int<1, max>,
     *     GopClosedCadence?: int<0, max>,
     *     GopSize?: double,
     *     GopSizeUnits?: 'FRAMES'|'SECONDS',
     *     Level?: 'H265_LEVEL_1'|'H265_LEVEL_2'|'H265_LEVEL_2_1'|'H265_LEVEL_3'|'H265_LEVEL_3_1'|'H265_LEVEL_4'|'H265_LEVEL_4_1'|'H265_LEVEL_5'|'H265_LEVEL_5_1'|'H265_LEVEL_5_2'|'H265_LEVEL_6'|'H265_LEVEL_6_1'|'H265_LEVEL_6_2'|'H265_LEVEL_AUTO',
     *     LookAheadRateControl?: 'HIGH'|'LOW'|'MEDIUM',
     *     MaxBitrate?: int<100000, 40000000>,
     *     MinIInterval?: int<0, 30>,
     *     ParDenominator?: int<1, max>,
     *     ParNumerator?: int<1, max>,
     *     Profile?: 'MAIN'|'MAIN_10BIT',
     *     QvbrQualityLevel?: int<1, 10>,
     *     RateControlMode?: 'CBR'|'MULTIPLEX'|'QVBR',
     *     ScanType?: 'INTERLACED'|'PROGRESSIVE',
     *     SceneChangeDetect?: 'DISABLED'|'ENABLED',
     *     Slices?: int<1, 16>,
     *     Tier?: 'HIGH'|'MAIN',
     *     TimecodeInsertion?: 'DISABLED'|'PIC_TIMING_SEI',
     *     TimecodeBurninSettings?: TimecodeBurninSettings,
     *     MvOverPictureBoundaries?: 'DISABLED'|'ENABLED',
     *     MvTemporalPredictor?: 'DISABLED'|'ENABLED',
     *     TileHeight?: int<64, 2160>,
     *     TilePadding?: 'NONE'|'PADDED',
     *     TileWidth?: int<256, 3840>,
     *     TreeblockSize?: 'AUTO'|'TREE_SIZE_32X32',
     *     MinQp?: int<1, 51>,
     *     Deblocking?: 'DISABLED'|'ENABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
