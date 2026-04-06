<?php

namespace Sunaoka\Aws\Structures\IoT1ClickDevicesService\ListDeviceEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Device|null $Device
 * @property string|null $StdEvent
 */
class DeviceEvent extends Shape
{
    /**
     * @param array{
     *     Device?: Device|null,
     *     StdEvent?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
