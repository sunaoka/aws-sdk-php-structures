<?php

namespace Sunaoka\Aws\Structures\Panorama\DeleteDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceId
 */
class DeleteDeviceRequest extends Request
{
    /**
     * @param array{DeviceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
