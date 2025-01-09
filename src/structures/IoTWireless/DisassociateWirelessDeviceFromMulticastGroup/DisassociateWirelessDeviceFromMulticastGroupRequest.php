<?php

namespace Sunaoka\Aws\Structures\IoTWireless\DisassociateWirelessDeviceFromMulticastGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $WirelessDeviceId
 */
class DisassociateWirelessDeviceFromMulticastGroupRequest extends Request
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
