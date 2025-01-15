<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDevice;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Sidewalk'|'LoRaWAN'|null $Type
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $DestinationName
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $ThingName
 * @property string|null $ThingArn
 * @property Shapes\LoRaWANDevice|null $LoRaWAN
 * @property Shapes\SidewalkDevice|null $Sidewalk
 * @property 'Enabled'|'Disabled'|null $Positioning
 */
class GetWirelessDeviceResponse extends Response
{
}
