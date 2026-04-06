<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateWirelessDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $DestinationName
 * @property string|null $Name
 * @property string|null $Description
 * @property Shapes\LoRaWANUpdateDevice|null $LoRaWAN
 * @property 'Enabled'|'Disabled'|null $Positioning
 */
class UpdateWirelessDeviceRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     DestinationName?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     LoRaWAN?: Shapes\LoRaWANUpdateDevice|null,
     *     Positioning?: 'Enabled'|'Disabled'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
