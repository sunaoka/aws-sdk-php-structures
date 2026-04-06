<?php

namespace Sunaoka\Aws\Structures\Braket\GetDevice;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $deviceArn
 * @property string $deviceCapabilities
 * @property string $deviceName
 * @property list<Shapes\DeviceQueueInfo>|null $deviceQueueInfo
 * @property 'ONLINE'|'OFFLINE'|'RETIRED' $deviceStatus
 * @property 'QPU'|'SIMULATOR' $deviceType
 * @property string $providerName
 */
class GetDeviceResponse extends Response
{
}
