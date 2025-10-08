<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateTransitGatewayPeering;

trait CreateTransitGatewayPeeringTrait
{
    /**
     * @param CreateTransitGatewayPeeringRequest $args
     * @return CreateTransitGatewayPeeringResponse
     */
    public function createTransitGatewayPeering(CreateTransitGatewayPeeringRequest $args)
    {
        $result = parent::createTransitGatewayPeering($args->toArray());
        return new CreateTransitGatewayPeeringResponse($result->toArray());
    }
}
