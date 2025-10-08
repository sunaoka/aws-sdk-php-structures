<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetTransitGatewayPeering;

trait GetTransitGatewayPeeringTrait
{
    /**
     * @param GetTransitGatewayPeeringRequest $args
     * @return GetTransitGatewayPeeringResponse
     */
    public function getTransitGatewayPeering(GetTransitGatewayPeeringRequest $args)
    {
        $result = parent::getTransitGatewayPeering($args->toArray());
        return new GetTransitGatewayPeeringResponse($result->toArray());
    }
}
