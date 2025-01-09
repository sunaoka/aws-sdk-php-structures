<?php

namespace Sunaoka\Aws\Structures\IoTWireless\DeleteWirelessGatewayTaskDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class DeleteWirelessGatewayTaskDefinitionRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
