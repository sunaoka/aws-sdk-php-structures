<?php

namespace Sunaoka\Aws\Structures\IoTWireless\AssociateWirelessDeviceWithThing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $ThingArn
 */
class AssociateWirelessDeviceWithThingRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     ThingArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
