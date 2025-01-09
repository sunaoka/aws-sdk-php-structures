<?php

namespace Sunaoka\Aws\Structures\IoT1ClickDevicesService\GetDeviceMethods\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceType
 * @property string $MethodName
 */
class DeviceMethod extends Shape
{
    /**
     * @param array{
     *     DeviceType?: string,
     *     MethodName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
