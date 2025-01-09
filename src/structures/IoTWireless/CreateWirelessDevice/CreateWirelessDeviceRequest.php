<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateWirelessDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Sidewalk'|'LoRaWAN' $Type
 * @property string $Name
 * @property string $Description
 * @property string $DestinationName
 * @property string $ClientRequestToken
 * @property Shapes\LoRaWANDevice $LoRaWAN
 * @property list<Shapes\Tag> $Tags
 * @property 'Enabled'|'Disabled' $Positioning
 * @property Shapes\SidewalkCreateWirelessDevice $Sidewalk
 */
class CreateWirelessDeviceRequest extends Request
{
    /**
     * @param array{
     *     Type: 'Sidewalk'|'LoRaWAN',
     *     Name?: string,
     *     Description?: string,
     *     DestinationName: string,
     *     ClientRequestToken?: string,
     *     LoRaWAN?: Shapes\LoRaWANDevice,
     *     Tags?: list<Shapes\Tag>,
     *     Positioning?: 'Enabled'|'Disabled',
     *     Sidewalk?: Shapes\SidewalkCreateWirelessDevice
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
