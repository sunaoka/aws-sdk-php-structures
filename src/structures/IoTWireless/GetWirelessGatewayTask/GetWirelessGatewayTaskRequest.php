<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessGatewayTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetWirelessGatewayTaskRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
