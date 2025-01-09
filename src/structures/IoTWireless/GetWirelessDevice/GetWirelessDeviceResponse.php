<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDevice;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Sidewalk'|'LoRaWAN' $Type
 * @property string $Name
 * @property string $Description
 * @property string $DestinationName
 * @property string $Id
 * @property string $Arn
 * @property string $ThingName
 * @property string $ThingArn
 * @property Shapes\LoRaWANDevice $LoRaWAN
 * @property Shapes\SidewalkDevice $Sidewalk
 * @property 'Enabled'|'Disabled' $Positioning
 */
class GetWirelessDeviceResponse extends Response
{
}
