<?php

namespace Sunaoka\Aws\Structures\IoTWireless\DeleteWirelessGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class DeleteWirelessGatewayRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
