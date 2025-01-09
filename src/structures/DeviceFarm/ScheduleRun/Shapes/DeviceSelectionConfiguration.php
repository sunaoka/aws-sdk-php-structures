<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ScheduleRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DeviceFilter> $filters
 * @property int $maxDevices
 */
class DeviceSelectionConfiguration extends Shape
{
    /**
     * @param array{
     *     filters: list<DeviceFilter>,
     *     maxDevices: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
