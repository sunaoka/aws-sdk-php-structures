<?php

namespace Sunaoka\Aws\Structures\IoTWireless\DeregisterWirelessDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property 'Sidewalk'|'LoRaWAN' $WirelessDeviceType
 */
class DeregisterWirelessDeviceRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     WirelessDeviceType?: 'Sidewalk'|'LoRaWAN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
