<?php

namespace Sunaoka\Aws\Structures\IoT1ClickDevicesService\GetDeviceMethods;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceId
 */
class GetDeviceMethodsRequest extends Request
{
    /**
     * @param array{DeviceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
