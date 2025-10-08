<?php

namespace Sunaoka\Aws\Structures\Ec2\AcceptTransitGatewayMulticastDomainAssociations;

trait AcceptTransitGatewayMulticastDomainAssociationsTrait
{
    /**
     * @param AcceptTransitGatewayMulticastDomainAssociationsRequest $args
     * @return AcceptTransitGatewayMulticastDomainAssociationsResponse
     */
    public function acceptTransitGatewayMulticastDomainAssociations(
        AcceptTransitGatewayMulticastDomainAssociationsRequest $args,
    ) {
        $result = parent::acceptTransitGatewayMulticastDomainAssociations($args->toArray());
        return new AcceptTransitGatewayMulticastDomainAssociationsResponse($result->toArray());
    }
}
