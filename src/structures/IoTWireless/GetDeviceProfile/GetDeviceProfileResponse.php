<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetDeviceProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Name
 * @property string $Id
 * @property Shapes\LoRaWANDeviceProfile $LoRaWAN
 * @property Shapes\SidewalkGetDeviceProfile $Sidewalk
 */
class GetDeviceProfileResponse extends Response
{
}
