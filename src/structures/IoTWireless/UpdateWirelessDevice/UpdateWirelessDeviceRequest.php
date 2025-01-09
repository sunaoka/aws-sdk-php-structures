<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateWirelessDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $DestinationName
 * @property string $Name
 * @property string $Description
 * @property Shapes\LoRaWANUpdateDevice $LoRaWAN
 * @property 'Enabled'|'Disabled' $Positioning
 */
class UpdateWirelessDeviceRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     DestinationName?: string,
     *     Name?: string,
     *     Description?: string,
     *     LoRaWAN?: Shapes\LoRaWANUpdateDevice,
     *     Positioning?: 'Enabled'|'Disabled'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
