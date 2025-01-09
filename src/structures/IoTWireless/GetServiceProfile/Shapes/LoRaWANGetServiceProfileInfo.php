<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetServiceProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $UlRate
 * @property int $UlBucketSize
 * @property string $UlRatePolicy
 * @property int $DlRate
 * @property int $DlBucketSize
 * @property string $DlRatePolicy
 * @property bool $AddGwMetadata
 * @property int $DevStatusReqFreq
 * @property bool $ReportDevStatusBattery
 * @property bool $ReportDevStatusMargin
 * @property int $DrMin
 * @property int $DrMax
 * @property string $ChannelMask
 * @property bool $PrAllowed
 * @property bool $HrAllowed
 * @property bool $RaAllowed
 * @property bool $NwkGeoLoc
 * @property int $TargetPer
 * @property int $MinGwDiversity
 */
class LoRaWANGetServiceProfileInfo extends Shape
{
    /**
     * @param array{
     *     UlRate?: int,
     *     UlBucketSize?: int,
     *     UlRatePolicy?: string,
     *     DlRate?: int,
     *     DlBucketSize?: int,
     *     DlRatePolicy?: string,
     *     AddGwMetadata?: bool,
     *     DevStatusReqFreq?: int,
     *     ReportDevStatusBattery?: bool,
     *     ReportDevStatusMargin?: bool,
     *     DrMin?: int,
     *     DrMax?: int,
     *     ChannelMask?: string,
     *     PrAllowed?: bool,
     *     HrAllowed?: bool,
     *     RaAllowed?: bool,
     *     NwkGeoLoc?: bool,
     *     TargetPer?: int,
     *     MinGwDiversity?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
