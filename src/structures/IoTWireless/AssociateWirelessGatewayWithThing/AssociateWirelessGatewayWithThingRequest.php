<?php

namespace Sunaoka\Aws\Structures\IoTWireless\AssociateWirelessGatewayWithThing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $ThingArn
 */
class AssociateWirelessGatewayWithThingRequest extends Request
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
