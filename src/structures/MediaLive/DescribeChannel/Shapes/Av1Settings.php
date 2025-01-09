<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTO'|'FIXED'|'NONE' $AfdSignaling
 * @property int $BufSize
 * @property Av1ColorSpaceSettings $ColorSpaceSettings
 * @property 'AFD_0000'|'AFD_0010'|'AFD_0011'|'AFD_0100'|'AFD_1000'|'AFD_1001'|'AFD_1010'|'AFD_1011'|'AFD_1101'|'AFD_1110'|'AFD_1111' $FixedAfd
 * @property int $FramerateDenominator
 * @property int $FramerateNumerator
 * @property double $GopSize
 * @property 'FRAMES'|'SECONDS' $GopSizeUnits
 * @property 'AV1_LEVEL_2'|'AV1_LEVEL_2_1'|'AV1_LEVEL_3'|'AV1_LEVEL_3_1'|'AV1_LEVEL_4'|'AV1_LEVEL_4_1'|'AV1_LEVEL_5'|'AV1_LEVEL_5_1'|'AV1_LEVEL_5_2'|'AV1_LEVEL_5_3'|'AV1_LEVEL_6'|'AV1_LEVEL_6_1'|'AV1_LEVEL_6_2'|'AV1_LEVEL_6_3'|'AV1_LEVEL_AUTO' $Level
 * @property 'HIGH'|'LOW'|'MEDIUM' $LookAheadRateControl
 * @property int $MaxBitrate
 * @property int $MinIInterval
 * @property int $ParDenominator
 * @property int $ParNumerator
 * @property int $QvbrQualityLevel
 * @property 'DISABLED'|'ENABLED' $SceneChangeDetect
 * @property TimecodeBurninSettings $TimecodeBurninSettings
 */
class Av1Settings extends Shape
{
    /**
     * @param array{
     *     AfdSignaling?: 'AUTO'|'FIXED'|'NONE',
     *     BufSize?: int,
     *     ColorSpaceSettings?: Av1ColorSpaceSettings,
     *     FixedAfd?: 'AFD_0000'|'AFD_0010'|'AFD_0011'|'AFD_0100'|'AFD_1000'|'AFD_1001'|'AFD_1010'|'AFD_1011'|'AFD_1101'|'AFD_1110'|'AFD_1111',
     *     FramerateDenominator: int,
     *     FramerateNumerator: int,
     *     GopSize?: double,
     *     GopSizeUnits?: 'FRAMES'|'SECONDS',
     *     Level?: 'AV1_LEVEL_2'|'AV1_LEVEL_2_1'|'AV1_LEVEL_3'|'AV1_LEVEL_3_1'|'AV1_LEVEL_4'|'AV1_LEVEL_4_1'|'AV1_LEVEL_5'|'AV1_LEVEL_5_1'|'AV1_LEVEL_5_2'|'AV1_LEVEL_5_3'|'AV1_LEVEL_6'|'AV1_LEVEL_6_1'|'AV1_LEVEL_6_2'|'AV1_LEVEL_6_3'|'AV1_LEVEL_AUTO',
     *     LookAheadRateControl?: 'HIGH'|'LOW'|'MEDIUM',
     *     MaxBitrate?: int,
     *     MinIInterval?: int,
     *     ParDenominator?: int,
     *     ParNumerator?: int,
     *     QvbrQualityLevel?: int,
     *     SceneChangeDetect?: 'DISABLED'|'ENABLED',
     *     TimecodeBurninSettings?: TimecodeBurninSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
