<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetServiceProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 2147483647>|null $UlRate
 * @property int<0, 2147483647>|null $UlBucketSize
 * @property string|null $UlRatePolicy
 * @property int<0, 2147483647>|null $DlRate
 * @property int<0, 2147483647>|null $DlBucketSize
 * @property string|null $DlRatePolicy
 * @property bool|null $AddGwMetadata
 * @property int<0, 2147483647>|null $DevStatusReqFreq
 * @property bool|null $ReportDevStatusBattery
 * @property bool|null $ReportDevStatusMargin
 * @property int<0, 15>|null $DrMin
 * @property int<0, 15>|null $DrMax
 * @property string|null $ChannelMask
 * @property bool|null $PrAllowed
 * @property bool|null $HrAllowed
 * @property bool|null $RaAllowed
 * @property bool|null $NwkGeoLoc
 * @property int<0, 100>|null $TargetPer
 * @property int<1, 100>|null $MinGwDiversity
 * @property int<0, 15>|null $TxPowerIndexMin
 * @property int<0, 15>|null $TxPowerIndexMax
 * @property int<0, 15>|null $NbTransMin
 * @property int<0, 15>|null $NbTransMax
 */
class LoRaWANGetServiceProfileInfo extends Shape
{
    /**
     * @param array{
     *     UlRate?: int<0, 2147483647>|null,
     *     UlBucketSize?: int<0, 2147483647>|null,
     *     UlRatePolicy?: string|null,
     *     DlRate?: int<0, 2147483647>|null,
     *     DlBucketSize?: int<0, 2147483647>|null,
     *     DlRatePolicy?: string|null,
     *     AddGwMetadata?: bool|null,
     *     DevStatusReqFreq?: int<0, 2147483647>|null,
     *     ReportDevStatusBattery?: bool|null,
     *     ReportDevStatusMargin?: bool|null,
     *     DrMin?: int<0, 15>|null,
     *     DrMax?: int<0, 15>|null,
     *     ChannelMask?: string|null,
     *     PrAllowed?: bool|null,
     *     HrAllowed?: bool|null,
     *     RaAllowed?: bool|null,
     *     NwkGeoLoc?: bool|null,
     *     TargetPer?: int<0, 100>|null,
     *     MinGwDiversity?: int<1, 100>|null,
     *     TxPowerIndexMin?: int<0, 15>|null,
     *     TxPowerIndexMax?: int<0, 15>|null,
     *     NbTransMin?: int<0, 15>|null,
     *     NbTransMax?: int<0, 15>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
