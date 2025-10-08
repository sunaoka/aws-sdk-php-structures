<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetTransitGatewayRegistrations;

trait GetTransitGatewayRegistrationsTrait
{
    /**
     * @param GetTransitGatewayRegistrationsRequest $args
     * @return GetTransitGatewayRegistrationsResponse
     */
    public function getTransitGatewayRegistrations(GetTransitGatewayRegistrationsRequest $args)
    {
        $result = parent::getTransitGatewayRegistrations($args->toArray());
        return new GetTransitGatewayRegistrationsResponse($result->toArray());
    }
}
