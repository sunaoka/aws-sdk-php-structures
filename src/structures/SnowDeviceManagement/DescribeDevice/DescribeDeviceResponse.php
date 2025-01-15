<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\DescribeDevice;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $associatedWithJob
 * @property list<Shapes\Capacity>|null $deviceCapacities
 * @property 'UNLOCKED'|'LOCKED'|'UNLOCKING'|null $deviceState
 * @property string|null $deviceType
 * @property \Aws\Api\DateTimeResult|null $lastReachedOutAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string|null $managedDeviceArn
 * @property string|null $managedDeviceId
 * @property list<Shapes\PhysicalNetworkInterface>|null $physicalNetworkInterfaces
 * @property Shapes\SoftwareInformation|null $software
 * @property array<string, string>|null $tags
 */
class DescribeDeviceResponse extends Response
{
}
