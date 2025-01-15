<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateDeviceProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $SupportsClassB
 * @property int<0, 1000>|null $ClassBTimeout
 * @property int<32, 4096>|null $PingSlotPeriod
 * @property int<0, 15>|null $PingSlotDr
 * @property int<1000000, 16700000>|null $PingSlotFreq
 * @property bool|null $SupportsClassC
 * @property int<0, 1000>|null $ClassCTimeout
 * @property string|null $MacVersion
 * @property string|null $RegParamsRevision
 * @property int<0, 15>|null $RxDelay1
 * @property int<0, 7>|null $RxDrOffset1
 * @property int<0, 15>|null $RxDataRate2
 * @property int<1000000, 16700000>|null $RxFreq2
 * @property list<int<1000000, 16700000>>|null $FactoryPresetFreqsList
 * @property int<0, 15>|null $MaxEirp
 * @property int<0, 100>|null $MaxDutyCycle
 * @property string|null $RfRegion
 * @property bool|null $SupportsJoin
 * @property bool|null $Supports32BitFCnt
 */
class LoRaWANDeviceProfile extends Shape
{
    /**
     * @param array{
     *     SupportsClassB?: bool|null,
     *     ClassBTimeout?: int<0, 1000>|null,
     *     PingSlotPeriod?: int<32, 4096>|null,
     *     PingSlotDr?: int<0, 15>|null,
     *     PingSlotFreq?: int<1000000, 16700000>|null,
     *     SupportsClassC?: bool|null,
     *     ClassCTimeout?: int<0, 1000>|null,
     *     MacVersion?: string|null,
     *     RegParamsRevision?: string|null,
     *     RxDelay1?: int<0, 15>|null,
     *     RxDrOffset1?: int<0, 7>|null,
     *     RxDataRate2?: int<0, 15>|null,
     *     RxFreq2?: int<1000000, 16700000>|null,
     *     FactoryPresetFreqsList?: list<int<1000000, 16700000>>|null,
     *     MaxEirp?: int<0, 15>|null,
     *     MaxDutyCycle?: int<0, 100>|null,
     *     RfRegion?: string|null,
     *     SupportsJoin?: bool|null,
     *     Supports32BitFCnt?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
