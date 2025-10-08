<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DisassociateTransitGatewayConnectPeer;

trait DisassociateTransitGatewayConnectPeerTrait
{
    /**
     * @param DisassociateTransitGatewayConnectPeerRequest $args
     * @return DisassociateTransitGatewayConnectPeerResponse
     */
    public function disassociateTransitGatewayConnectPeer(DisassociateTransitGatewayConnectPeerRequest $args)
    {
        $result = parent::disassociateTransitGatewayConnectPeer($args->toArray());
        return new DisassociateTransitGatewayConnectPeerResponse($result->toArray());
    }
}
