<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\UpdateDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DeviceArn
 * @property string|null $DeviceName
 */
class UpdateDeviceRequest extends Request
{
    /**
     * @param array{
     *     DeviceArn?: string|null,
     *     DeviceName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
