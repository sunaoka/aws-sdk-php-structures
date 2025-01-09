<?php

namespace Sunaoka\Aws\Structures\IoT1ClickDevicesService\InvokeDeviceMethod;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceId
 * @property Shapes\DeviceMethod $DeviceMethod
 * @property string $DeviceMethodParameters
 */
class InvokeDeviceMethodRequest extends Request
{
    /**
     * @param array{
     *     DeviceId: string,
     *     DeviceMethod?: Shapes\DeviceMethod,
     *     DeviceMethodParameters?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
