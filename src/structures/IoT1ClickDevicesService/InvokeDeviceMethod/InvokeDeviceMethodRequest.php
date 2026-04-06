<?php

namespace Sunaoka\Aws\Structures\IoT1ClickDevicesService\InvokeDeviceMethod;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceId
 * @property Shapes\DeviceMethod|null $DeviceMethod
 * @property string|null $DeviceMethodParameters
 */
class InvokeDeviceMethodRequest extends Request
{
    /**
     * @param array{
     *     DeviceId: string,
     *     DeviceMethod?: Shapes\DeviceMethod|null,
     *     DeviceMethodParameters?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
