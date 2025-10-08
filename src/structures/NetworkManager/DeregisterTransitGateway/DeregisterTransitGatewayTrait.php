<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DeregisterTransitGateway;

trait DeregisterTransitGatewayTrait
{
    /**
     * @param DeregisterTransitGatewayRequest $args
     * @return DeregisterTransitGatewayResponse
     */
    public function deregisterTransitGateway(DeregisterTransitGatewayRequest $args)
    {
        $result = parent::deregisterTransitGateway($args->toArray());
        return new DeregisterTransitGatewayResponse($result->toArray());
    }
}
