<?php

namespace Sunaoka\Aws\Structures\IoTWireless\AssociateWirelessDeviceWithFuotaTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $WirelessDeviceId
 */
class AssociateWirelessDeviceWithFuotaTaskRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     WirelessDeviceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
