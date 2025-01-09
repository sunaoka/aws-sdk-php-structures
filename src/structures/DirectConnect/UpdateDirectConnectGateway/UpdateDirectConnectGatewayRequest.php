<?php

namespace Sunaoka\Aws\Structures\DirectConnect\UpdateDirectConnectGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $directConnectGatewayId
 * @property string $newDirectConnectGatewayName
 */
class UpdateDirectConnectGatewayRequest extends Request
{
    /**
     * @param array{
     *     directConnectGatewayId: string,
     *     newDirectConnectGatewayName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
