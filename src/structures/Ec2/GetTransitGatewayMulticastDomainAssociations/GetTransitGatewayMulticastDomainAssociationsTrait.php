<?php

namespace Sunaoka\Aws\Structures\Ec2\GetTransitGatewayMulticastDomainAssociations;

trait GetTransitGatewayMulticastDomainAssociationsTrait
{
    /**
     * @param GetTransitGatewayMulticastDomainAssociationsRequest $args
     * @return GetTransitGatewayMulticastDomainAssociationsResponse
     */
    public function getTransitGatewayMulticastDomainAssociations(GetTransitGatewayMulticastDomainAssociationsRequest $args)
    {
        $result = parent::getTransitGatewayMulticastDomainAssociations($args->toArray());
        return new GetTransitGatewayMulticastDomainAssociationsResponse($result->toArray());
    }
}
