<?php

namespace Sunaoka\Aws\Structures\IoTWireless\SendDataToMulticastGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $PayloadData
 * @property Shapes\MulticastWirelessMetadata $WirelessMetadata
 */
class SendDataToMulticastGroupRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     PayloadData: string,
     *     WirelessMetadata: Shapes\MulticastWirelessMetadata
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
