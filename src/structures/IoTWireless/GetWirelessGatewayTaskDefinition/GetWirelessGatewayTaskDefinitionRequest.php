<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessGatewayTaskDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetWirelessGatewayTaskDefinitionRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
