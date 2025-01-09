<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DisassociateTransitGatewayConnectPeer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string $TransitGatewayConnectPeerArn
 */
class DisassociateTransitGatewayConnectPeerRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     TransitGatewayConnectPeerArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
