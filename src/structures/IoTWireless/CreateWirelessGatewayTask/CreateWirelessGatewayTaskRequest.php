<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateWirelessGatewayTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $WirelessGatewayTaskDefinitionId
 */
class CreateWirelessGatewayTaskRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     WirelessGatewayTaskDefinitionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
