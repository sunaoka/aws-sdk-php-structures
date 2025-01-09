<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetServiceProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 2147483647> $UlRate
 * @property int<0, 2147483647> $UlBucketSize
 * @property string $UlRatePolicy
 * @property int<0, 2147483647> $DlRate
 * @property int<0, 2147483647> $DlBucketSize
 * @property string $DlRatePolicy
 * @property bool $AddGwMetadata
 * @property int<0, 2147483647> $DevStatusReqFreq
 * @property bool $ReportDevStatusBattery
 * @property bool $ReportDevStatusMargin
 * @property int<0, 15> $DrMin
 * @property int<0, 15> $DrMax
 * @property string $ChannelMask
 * @property bool $PrAllowed
 * @property bool $HrAllowed
 * @property bool $RaAllowed
 * @property bool $NwkGeoLoc
 * @property int<0, 100> $TargetPer
 * @property int<1, 100> $MinGwDiversity
 */
class LoRaWANGetServiceProfileInfo extends Shape
{
    /**
     * @param array{
     *     UlRate?: int<0, 2147483647>,
     *     UlBucketSize?: int<0, 2147483647>,
     *     UlRatePolicy?: string,
     *     DlRate?: int<0, 2147483647>,
     *     DlBucketSize?: int<0, 2147483647>,
     *     DlRatePolicy?: string,
     *     AddGwMetadata?: bool,
     *     DevStatusReqFreq?: int<0, 2147483647>,
     *     ReportDevStatusBattery?: bool,
     *     ReportDevStatusMargin?: bool,
     *     DrMin?: int<0, 15>,
     *     DrMax?: int<0, 15>,
     *     ChannelMask?: string,
     *     PrAllowed?: bool,
     *     HrAllowed?: bool,
     *     RaAllowed?: bool,
     *     NwkGeoLoc?: bool,
     *     TargetPer?: int<0, 100>,
     *     MinGwDiversity?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
