<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListDeviceProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<0, 250>|null $MaxResults
 * @property 'Sidewalk'|'LoRaWAN'|null $DeviceProfileType
 */
class ListDeviceProfilesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 250>|null,
     *     DeviceProfileType?: 'Sidewalk'|'LoRaWAN'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
