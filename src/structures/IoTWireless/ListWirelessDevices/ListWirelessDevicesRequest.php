<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListWirelessDevices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $DestinationName
 * @property string $DeviceProfileId
 * @property string $ServiceProfileId
 * @property 'Sidewalk'|'LoRaWAN' $WirelessDeviceType
 * @property string $FuotaTaskId
 * @property string $MulticastGroupId
 */
class ListWirelessDevicesRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string,
     *     DestinationName?: string,
     *     DeviceProfileId?: string,
     *     ServiceProfileId?: string,
     *     WirelessDeviceType?: 'Sidewalk'|'LoRaWAN',
     *     FuotaTaskId?: string,
     *     MulticastGroupId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
