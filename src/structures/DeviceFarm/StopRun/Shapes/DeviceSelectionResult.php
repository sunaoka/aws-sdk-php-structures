<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\StopRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DeviceFilter> $filters
 * @property int $matchedDevicesCount
 * @property int $maxDevices
 */
class DeviceSelectionResult extends Shape
{
    /**
     * @param array{
     *     filters?: list<DeviceFilter>,
     *     matchedDevicesCount?: int,
     *     maxDevices?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
