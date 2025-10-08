<?php

namespace Sunaoka\Aws\Structures\NetworkManager\RegisterTransitGateway;

trait RegisterTransitGatewayTrait
{
    /**
     * @param RegisterTransitGatewayRequest $args
     * @return RegisterTransitGatewayResponse
     */
    public function registerTransitGateway(RegisterTransitGatewayRequest $args)
    {
        $result = parent::registerTransitGateway($args->toArray());
        return new RegisterTransitGatewayResponse($result->toArray());
    }
}
