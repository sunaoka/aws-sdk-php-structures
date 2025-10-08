<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetTransitGatewayConnectPeerAssociations;

trait GetTransitGatewayConnectPeerAssociationsTrait
{
    /**
     * @param GetTransitGatewayConnectPeerAssociationsRequest $args
     * @return GetTransitGatewayConnectPeerAssociationsResponse
     */
    public function getTransitGatewayConnectPeerAssociations(GetTransitGatewayConnectPeerAssociationsRequest $args)
    {
        $result = parent::getTransitGatewayConnectPeerAssociations($args->toArray());
        return new GetTransitGatewayConnectPeerAssociationsResponse($result->toArray());
    }
}
