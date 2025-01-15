<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListDeviceInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $deviceArn
 * @property list<string>|null $labels
 * @property 'IN_USE'|'PREPARING'|'AVAILABLE'|'NOT_AVAILABLE'|null $status
 * @property string|null $udid
 * @property InstanceProfile|null $instanceProfile
 */
class DeviceInstance extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     deviceArn?: string|null,
     *     labels?: list<string>|null,
     *     status?: 'IN_USE'|'PREPARING'|'AVAILABLE'|'NOT_AVAILABLE'|null,
     *     udid?: string|null,
     *     instanceProfile?: InstanceProfile|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
