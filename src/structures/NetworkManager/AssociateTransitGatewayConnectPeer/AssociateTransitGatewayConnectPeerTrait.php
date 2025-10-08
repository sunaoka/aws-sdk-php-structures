<?php

namespace Sunaoka\Aws\Structures\NetworkManager\AssociateTransitGatewayConnectPeer;

trait AssociateTransitGatewayConnectPeerTrait
{
    /**
     * @param AssociateTransitGatewayConnectPeerRequest $args
     * @return AssociateTransitGatewayConnectPeerResponse
     */
    public function associateTransitGatewayConnectPeer(AssociateTransitGatewayConnectPeerRequest $args)
    {
        $result = parent::associateTransitGatewayConnectPeer($args->toArray());
        return new AssociateTransitGatewayConnectPeerResponse($result->toArray());
    }
}
