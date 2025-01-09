<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListWirelessDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Id
 * @property 'Sidewalk'|'LoRaWAN' $Type
 * @property string $Name
 * @property string $DestinationName
 * @property string $LastUplinkReceivedAt
 * @property LoRaWANListDevice $LoRaWAN
 * @property SidewalkListDevice $Sidewalk
 * @property 'Initial'|'Package_Not_Supported'|'FragAlgo_unsupported'|'Not_enough_memory'|'FragIndex_unsupported'|'Wrong_descriptor'|'SessionCnt_replay'|'MissingFrag'|'MemoryError'|'MICError'|'Successful'|'Device_exist_in_conflict_fuota_task' $FuotaDeviceStatus
 * @property string $MulticastDeviceStatus
 * @property int $McGroupId
 */
class WirelessDeviceStatistics extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Id?: string,
     *     Type?: 'Sidewalk'|'LoRaWAN',
     *     Name?: string,
     *     DestinationName?: string,
     *     LastUplinkReceivedAt?: string,
     *     LoRaWAN?: LoRaWANListDevice,
     *     Sidewalk?: SidewalkListDevice,
     *     FuotaDeviceStatus?: 'Initial'|'Package_Not_Supported'|'FragAlgo_unsupported'|'Not_enough_memory'|'FragIndex_unsupported'|'Wrong_descriptor'|'SessionCnt_replay'|'MissingFrag'|'MemoryError'|'MICError'|'Successful'|'Device_exist_in_conflict_fuota_task',
     *     MulticastDeviceStatus?: string,
     *     McGroupId?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
