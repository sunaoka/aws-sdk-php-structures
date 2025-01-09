<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTO'|'FIXED'|'NONE' $AfdSignaling
 * @property int<50000, 16000000> $BufSize
 * @property Av1ColorSpaceSettings $ColorSpaceSettings
 * @property 'AFD_0000'|'AFD_0010'|'AFD_0011'|'AFD_0100'|'AFD_1000'|'AFD_1001'|'AFD_1010'|'AFD_1011'|'AFD_1101'|'AFD_1110'|'AFD_1111' $FixedAfd
 * @property int<1, 3003> $FramerateDenominator
 * @property int<1, max> $FramerateNumerator
 * @property double $GopSize
 * @property 'FRAMES'|'SECONDS' $GopSizeUnits
 * @property 'AV1_LEVEL_2'|'AV1_LEVEL_2_1'|'AV1_LEVEL_3'|'AV1_LEVEL_3_1'|'AV1_LEVEL_4'|'AV1_LEVEL_4_1'|'AV1_LEVEL_5'|'AV1_LEVEL_5_1'|'AV1_LEVEL_5_2'|'AV1_LEVEL_5_3'|'AV1_LEVEL_6'|'AV1_LEVEL_6_1'|'AV1_LEVEL_6_2'|'AV1_LEVEL_6_3'|'AV1_LEVEL_AUTO' $Level
 * @property 'HIGH'|'LOW'|'MEDIUM' $LookAheadRateControl
 * @property int<50000, 8000000> $MaxBitrate
 * @property int<0, 30> $MinIInterval
 * @property int<1, max> $ParDenominator
 * @property int<1, max> $ParNumerator
 * @property int<1, 10> $QvbrQualityLevel
 * @property 'DISABLED'|'ENABLED' $SceneChangeDetect
 * @property TimecodeBurninSettings $TimecodeBurninSettings
 */
class Av1Settings extends Shape
{
    /**
     * @param array{
     *     AfdSignaling?: 'AUTO'|'FIXED'|'NONE',
     *     BufSize?: int<50000, 16000000>,
     *     ColorSpaceSettings?: Av1ColorSpaceSettings,
     *     FixedAfd?: 'AFD_0000'|'AFD_0010'|'AFD_0011'|'AFD_0100'|'AFD_1000'|'AFD_1001'|'AFD_1010'|'AFD_1011'|'AFD_1101'|'AFD_1110'|'AFD_1111',
     *     FramerateDenominator: int<1, 3003>,
     *     FramerateNumerator: int<1, max>,
     *     GopSize?: double,
     *     GopSizeUnits?: 'FRAMES'|'SECONDS',
     *     Level?: 'AV1_LEVEL_2'|'AV1_LEVEL_2_1'|'AV1_LEVEL_3'|'AV1_LEVEL_3_1'|'AV1_LEVEL_4'|'AV1_LEVEL_4_1'|'AV1_LEVEL_5'|'AV1_LEVEL_5_1'|'AV1_LEVEL_5_2'|'AV1_LEVEL_5_3'|'AV1_LEVEL_6'|'AV1_LEVEL_6_1'|'AV1_LEVEL_6_2'|'AV1_LEVEL_6_3'|'AV1_LEVEL_AUTO',
     *     LookAheadRateControl?: 'HIGH'|'LOW'|'MEDIUM',
     *     MaxBitrate?: int<50000, 8000000>,
     *     MinIInterval?: int<0, 30>,
     *     ParDenominator?: int<1, max>,
     *     ParNumerator?: int<1, max>,
     *     QvbrQualityLevel?: int<1, 10>,
     *     SceneChangeDetect?: 'DISABLED'|'ENABLED',
     *     TimecodeBurninSettings?: TimecodeBurninSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
