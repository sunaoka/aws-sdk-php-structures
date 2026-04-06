<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\DeleteDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceArn
 */
class DeleteDeviceRequest extends Request
{
    /**
     * @param array{DeviceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
