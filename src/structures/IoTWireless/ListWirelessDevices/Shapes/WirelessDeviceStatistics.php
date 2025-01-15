<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListWirelessDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Id
 * @property 'Sidewalk'|'LoRaWAN'|null $Type
 * @property string|null $Name
 * @property string|null $DestinationName
 * @property string|null $LastUplinkReceivedAt
 * @property LoRaWANListDevice|null $LoRaWAN
 * @property SidewalkListDevice|null $Sidewalk
 * @property 'Initial'|'Package_Not_Supported'|'FragAlgo_unsupported'|'Not_enough_memory'|'FragIndex_unsupported'|'Wrong_descriptor'|'SessionCnt_replay'|'MissingFrag'|'MemoryError'|'MICError'|'Successful'|'Device_exist_in_conflict_fuota_task'|null $FuotaDeviceStatus
 * @property string|null $MulticastDeviceStatus
 * @property int<1, 256>|null $McGroupId
 */
class WirelessDeviceStatistics extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Id?: string|null,
     *     Type?: 'Sidewalk'|'LoRaWAN'|null,
     *     Name?: string|null,
     *     DestinationName?: string|null,
     *     LastUplinkReceivedAt?: string|null,
     *     LoRaWAN?: LoRaWANListDevice|null,
     *     Sidewalk?: SidewalkListDevice|null,
     *     FuotaDeviceStatus?: 'Initial'|'Package_Not_Supported'|'FragAlgo_unsupported'|'Not_enough_memory'|'FragIndex_unsupported'|'Wrong_descriptor'|'SessionCnt_replay'|'MissingFrag'|'MemoryError'|'MICError'|'Successful'|'Device_exist_in_conflict_fuota_task'|null,
     *     MulticastDeviceStatus?: string|null,
     *     McGroupId?: int<1, 256>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
