<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetDeviceProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $Name
 * @property string|null $Id
 * @property Shapes\LoRaWANDeviceProfile|null $LoRaWAN
 * @property Shapes\SidewalkGetDeviceProfile|null $Sidewalk
 */
class GetDeviceProfileResponse extends Response
{
}
