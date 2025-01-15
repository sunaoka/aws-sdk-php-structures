<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListWirelessDevices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 250>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $DestinationName
 * @property string|null $DeviceProfileId
 * @property string|null $ServiceProfileId
 * @property 'Sidewalk'|'LoRaWAN'|null $WirelessDeviceType
 * @property string|null $FuotaTaskId
 * @property string|null $MulticastGroupId
 */
class ListWirelessDevicesRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<0, 250>|null,
     *     NextToken?: string|null,
     *     DestinationName?: string|null,
     *     DeviceProfileId?: string|null,
     *     ServiceProfileId?: string|null,
     *     WirelessDeviceType?: 'Sidewalk'|'LoRaWAN'|null,
     *     FuotaTaskId?: string|null,
     *     MulticastGroupId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
