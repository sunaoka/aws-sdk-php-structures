<?php

namespace Sunaoka\Aws\Structures\IoT1ClickDevicesService\InvokeDeviceMethod\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeviceType
 * @property string|null $MethodName
 */
class DeviceMethod extends Shape
{
    /**
     * @param array{
     *     DeviceType?: string|null,
     *     MethodName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
