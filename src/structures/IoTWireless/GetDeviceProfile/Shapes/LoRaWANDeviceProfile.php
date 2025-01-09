<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetDeviceProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $SupportsClassB
 * @property int $ClassBTimeout
 * @property int $PingSlotPeriod
 * @property int $PingSlotDr
 * @property int $PingSlotFreq
 * @property bool $SupportsClassC
 * @property int $ClassCTimeout
 * @property string $MacVersion
 * @property string $RegParamsRevision
 * @property int $RxDelay1
 * @property int $RxDrOffset1
 * @property int $RxDataRate2
 * @property int $RxFreq2
 * @property list<int> $FactoryPresetFreqsList
 * @property int $MaxEirp
 * @property int $MaxDutyCycle
 * @property string $RfRegion
 * @property bool $SupportsJoin
 * @property bool $Supports32BitFCnt
 */
class LoRaWANDeviceProfile extends Shape
{
    /**
     * @param array{
     *     SupportsClassB?: bool,
     *     ClassBTimeout?: int,
     *     PingSlotPeriod?: int,
     *     PingSlotDr?: int,
     *     PingSlotFreq?: int,
     *     SupportsClassC?: bool,
     *     ClassCTimeout?: int,
     *     MacVersion?: string,
     *     RegParamsRevision?: string,
     *     RxDelay1?: int,
     *     RxDrOffset1?: int,
     *     RxDataRate2?: int,
     *     RxFreq2?: int,
     *     FactoryPresetFreqsList?: list<int>,
     *     MaxEirp?: int,
     *     MaxDutyCycle?: int,
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
