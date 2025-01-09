<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateDeviceProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $SupportsClassB
 * @property int<0, 1000> $ClassBTimeout
 * @property int<32, 4096> $PingSlotPeriod
 * @property int<0, 15> $PingSlotDr
 * @property int<1000000, 16700000> $PingSlotFreq
 * @property bool $SupportsClassC
 * @property int<0, 1000> $ClassCTimeout
 * @property string $MacVersion
 * @property string $RegParamsRevision
 * @property int<0, 15> $RxDelay1
 * @property int<0, 7> $RxDrOffset1
 * @property int<0, 15> $RxDataRate2
 * @property int<1000000, 16700000> $RxFreq2
 * @property list<int<1000000, 16700000>> $FactoryPresetFreqsList
 * @property int<0, 15> $MaxEirp
 * @property int<0, 100> $MaxDutyCycle
 * @property string $RfRegion
 * @property bool $SupportsJoin
 * @property bool $Supports32BitFCnt
 */
class LoRaWANDeviceProfile extends Shape
{
    /**
     * @param array{
     *     SupportsClassB?: bool,
     *     ClassBTimeout?: int<0, 1000>,
     *     PingSlotPeriod?: int<32, 4096>,
     *     PingSlotDr?: int<0, 15>,
     *     PingSlotFreq?: int<1000000, 16700000>,
     *     SupportsClassC?: bool,
     *     ClassCTimeout?: int<0, 1000>,
     *     MacVersion?: string,
     *     RegParamsRevision?: string,
     *     RxDelay1?: int<0, 15>,
     *     RxDrOffset1?: int<0, 7>,
     *     RxDataRate2?: int<0, 15>,
     *     RxFreq2?: int<1000000, 16700000>,
     *     FactoryPresetFreqsList?: list<int<1000000, 16700000>>,
     *     MaxEirp?: int<0, 15>,
     *     MaxDutyCycle?: int<0, 100>,
     *     RfRegion?: string,
     *     SupportsJoin?: bool,
     *     Supports32BitFCnt?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
