<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetDevicePoolCompatibility\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $deviceArn
 * @property list<string> $labels
 * @property 'IN_USE'|'PREPARING'|'AVAILABLE'|'NOT_AVAILABLE' $status
 * @property string $udid
 * @property InstanceProfile $instanceProfile
 */
class DeviceInstance extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     deviceArn?: string,
     *     labels?: list<string>,
     *     status?: 'IN_USE'|'PREPARING'|'AVAILABLE'|'NOT_AVAILABLE',
     *     udid?: string,
     *     instanceProfile?: InstanceProfile
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
