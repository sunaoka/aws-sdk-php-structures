<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DeleteDirectConnectGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $directConnectGatewayId
 */
class DeleteDirectConnectGatewayRequest extends Request
{
    /**
     * @param array{directConnectGatewayId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
