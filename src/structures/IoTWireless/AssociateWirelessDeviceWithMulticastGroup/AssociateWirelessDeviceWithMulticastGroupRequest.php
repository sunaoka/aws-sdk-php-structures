<?php

namespace Sunaoka\Aws\Structures\IoTWireless\AssociateWirelessDeviceWithMulticastGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $WirelessDeviceId
 */
class AssociateWirelessDeviceWithMulticastGroupRequest extends Request
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
