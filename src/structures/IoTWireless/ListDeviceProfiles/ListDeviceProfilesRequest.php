<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListDeviceProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property 'Sidewalk'|'LoRaWAN' $DeviceProfileType
 */
class ListDeviceProfilesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     DeviceProfileType?: 'Sidewalk'|'LoRaWAN'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
