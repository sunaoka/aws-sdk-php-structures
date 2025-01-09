<?php

namespace Sunaoka\Aws\Structures\IoT1ClickDevicesService\UnclaimDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceId
 */
class UnclaimDeviceRequest extends Request
{
    /**
     * @param array{DeviceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
