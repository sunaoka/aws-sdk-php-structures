<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\DescribeDevice;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $associatedWithJob
 * @property list<Shapes\Capacity> $deviceCapacities
 * @property 'UNLOCKED'|'LOCKED'|'UNLOCKING' $deviceState
 * @property string $deviceType
 * @property \Aws\Api\DateTimeResult $lastReachedOutAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $managedDeviceArn
 * @property string $managedDeviceId
 * @property list<Shapes\PhysicalNetworkInterface> $physicalNetworkInterfaces
 * @property Shapes\SoftwareInformation $software
 * @property array<string, string> $tags
 */
class DescribeDeviceResponse extends Response
{
}
