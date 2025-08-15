<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTO'|'FIXED'|'NONE'|null $AfdSignaling
 * @property int<50000, 24000000>|null $BufSize
 * @property Av1ColorSpaceSettings|null $ColorSpaceSettings
 * @property 'AFD_0000'|'AFD_0010'|'AFD_0011'|'AFD_0100'|'AFD_1000'|'AFD_1001'|'AFD_1010'|'AFD_1011'|'AFD_1101'|'AFD_1110'|'AFD_1111'|null $FixedAfd
 * @property int<1, 3003> $FramerateDenominator
 * @property int<1, max> $FramerateNumerator
 * @property double|null $GopSize
 * @property 'FRAMES'|'SECONDS'|null $GopSizeUnits
 * @property 'AV1_LEVEL_2'|'AV1_LEVEL_2_1'|'AV1_LEVEL_3'|'AV1_LEVEL_3_1'|'AV1_LEVEL_4'|'AV1_LEVEL_4_1'|'AV1_LEVEL_5'|'AV1_LEVEL_5_1'|'AV1_LEVEL_5_2'|'AV1_LEVEL_5_3'|'AV1_LEVEL_6'|'AV1_LEVEL_6_1'|'AV1_LEVEL_6_2'|'AV1_LEVEL_6_3'|'AV1_LEVEL_AUTO'|null $Level
 * @property 'HIGH'|'LOW'|'MEDIUM'|null $LookAheadRateControl
 * @property int<50000, 12000000>|null $MaxBitrate
 * @property int<0, 30>|null $MinIInterval
 * @property int<1, max>|null $ParDenominator
 * @property int<1, max>|null $ParNumerator
 * @property int<1, 10>|null $QvbrQualityLevel
 * @property 'DISABLED'|'ENABLED'|null $SceneChangeDetect
 * @property TimecodeBurninSettings|null $TimecodeBurninSettings
 * @property int<50000, 12000000>|null $Bitrate
 * @property 'CBR'|'QVBR'|null $RateControlMode
 */
class Av1Settings extends Shape
{
    /**
     * @param array{
     *     AfdSignaling?: 'AUTO'|'FIXED'|'NONE'|null,
     *     BufSize?: int<50000, 24000000>|null,
     *     ColorSpaceSettings?: Av1ColorSpaceSettings|null,
     *     FixedAfd?: 'AFD_0000'|'AFD_0010'|'AFD_0011'|'AFD_0100'|'AFD_1000'|'AFD_1001'|'AFD_1010'|'AFD_1011'|'AFD_1101'|'AFD_1110'|'AFD_1111'|null,
     *     FramerateDenominator: int<1, 3003>,
     *     FramerateNumerator: int<1, max>,
     *     GopSize?: double|null,
     *     GopSizeUnits?: 'FRAMES'|'SECONDS'|null,
     *     Level?: 'AV1_LEVEL_2'|'AV1_LEVEL_2_1'|'AV1_LEVEL_3'|'AV1_LEVEL_3_1'|'AV1_LEVEL_4'|'AV1_LEVEL_4_1'|'AV1_LEVEL_5'|'AV1_LEVEL_5_1'|'AV1_LEVEL_5_2'|'AV1_LEVEL_5_3'|'AV1_LEVEL_6'|'AV1_LEVEL_6_1'|'AV1_LEVEL_6_2'|'AV1_LEVEL_6_3'|'AV1_LEVEL_AUTO'|null,
     *     LookAheadRateControl?: 'HIGH'|'LOW'|'MEDIUM'|null,
     *     MaxBitrate?: int<50000, 12000000>|null,
     *     MinIInterval?: int<0, 30>|null,
     *     ParDenominator?: int<1, max>|null,
     *     ParNumerator?: int<1, max>|null,
     *     QvbrQualityLevel?: int<1, 10>|null,
     *     SceneChangeDetect?: 'DISABLED'|'ENABLED'|null,
     *     TimecodeBurninSettings?: TimecodeBurninSettings|null,
     *     Bitrate?: int<50000, 12000000>|null,
     *     RateControlMode?: 'CBR'|'QVBR'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
