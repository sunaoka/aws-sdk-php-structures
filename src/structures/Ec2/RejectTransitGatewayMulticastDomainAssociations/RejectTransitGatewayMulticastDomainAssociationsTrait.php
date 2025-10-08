<?php

namespace Sunaoka\Aws\Structures\Ec2\RejectTransitGatewayMulticastDomainAssociations;

trait RejectTransitGatewayMulticastDomainAssociationsTrait
{
    /**
     * @param RejectTransitGatewayMulticastDomainAssociationsRequest $args
     * @return RejectTransitGatewayMulticastDomainAssociationsResponse
     */
    public function rejectTransitGatewayMulticastDomainAssociations(RejectTransitGatewayMulticastDomainAssociationsRequest $args)
    {
        $result = parent::rejectTransitGatewayMulticastDomainAssociations($args->toArray());
        return new RejectTransitGatewayMulticastDomainAssociationsResponse($result->toArray());
    }
}
