<?php

namespace Sunaoka\Aws\Structures\Braket\GetDevice;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $deviceArn
 * @property string $deviceName
 * @property string $providerName
 * @property 'QPU'|'SIMULATOR' $deviceType
 * @property 'ONLINE'|'OFFLINE'|'RETIRED' $deviceStatus
 * @property string $deviceCapabilities
 * @property list<Shapes\DeviceQueueInfo>|null $deviceQueueInfo
 */
class GetDeviceResponse extends Response
{
}
