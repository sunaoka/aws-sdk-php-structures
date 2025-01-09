<?php

namespace Sunaoka\Aws\Structures\NetworkManager\RegisterTransitGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string $TransitGatewayArn
 */
class RegisterTransitGatewayRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     TransitGatewayArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
