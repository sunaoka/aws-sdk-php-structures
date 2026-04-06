<?php

namespace Sunaoka\Aws\Structures\IoT1ClickDevicesService\InitiateDeviceClaim;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceId
 */
class InitiateDeviceClaimRequest extends Request
{
    /**
     * @param array{DeviceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
