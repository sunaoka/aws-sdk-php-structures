<?php

namespace Sunaoka\Aws\Structures\IoTWireless\DisassociateWirelessDeviceFromThing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class DisassociateWirelessDeviceFromThingRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
