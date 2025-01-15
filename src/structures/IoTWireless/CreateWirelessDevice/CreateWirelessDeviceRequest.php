<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateWirelessDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Sidewalk'|'LoRaWAN' $Type
 * @property string|null $Name
 * @property string|null $Description
 * @property string $DestinationName
 * @property string|null $ClientRequestToken
 * @property Shapes\LoRaWANDevice|null $LoRaWAN
 * @property list<Shapes\Tag>|null $Tags
 * @property 'Enabled'|'Disabled'|null $Positioning
 * @property Shapes\SidewalkCreateWirelessDevice|null $Sidewalk
 */
class CreateWirelessDeviceRequest extends Request
{
    /**
     * @param array{
     *     Type: 'Sidewalk'|'LoRaWAN',
     *     Name?: string|null,
     *     Description?: string|null,
     *     DestinationName: string,
     *     ClientRequestToken?: string|null,
     *     LoRaWAN?: Shapes\LoRaWANDevice|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     Positioning?: 'Enabled'|'Disabled'|null,
     *     Sidewalk?: Shapes\SidewalkCreateWirelessDevice|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
