<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DeregisterTransitGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string $TransitGatewayArn
 */
class DeregisterTransitGatewayRequest extends Request
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
