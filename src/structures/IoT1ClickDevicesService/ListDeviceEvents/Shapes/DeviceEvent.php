<?php

namespace Sunaoka\Aws\Structures\IoT1ClickDevicesService\ListDeviceEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Device $Device
 * @property string $StdEvent
 */
class DeviceEvent extends Shape
{
    /**
     * @param array{
     *     Device?: Device,
     *     StdEvent?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
