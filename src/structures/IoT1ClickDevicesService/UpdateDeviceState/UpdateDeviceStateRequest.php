<?php

namespace Sunaoka\Aws\Structures\IoT1ClickDevicesService\UpdateDeviceState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceId
 * @property bool|null $Enabled
 */
class UpdateDeviceStateRequest extends Request
{
    /**
     * @param array{
     *     DeviceId: string,
     *     Enabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
