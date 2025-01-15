<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DeviceFilter>|null $filters
 * @property int|null $matchedDevicesCount
 * @property int|null $maxDevices
 */
class DeviceSelectionResult extends Shape
{
    /**
     * @param array{
     *     filters?: list<DeviceFilter>|null,
     *     matchedDevicesCount?: int|null,
     *     maxDevices?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
