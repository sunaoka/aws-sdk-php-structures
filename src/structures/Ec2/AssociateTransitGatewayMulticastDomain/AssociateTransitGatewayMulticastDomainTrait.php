<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateTransitGatewayMulticastDomain;

trait AssociateTransitGatewayMulticastDomainTrait
{
    /**
     * @param AssociateTransitGatewayMulticastDomainRequest $args
     * @return AssociateTransitGatewayMulticastDomainResponse
     */
    public function associateTransitGatewayMulticastDomain(AssociateTransitGatewayMulticastDomainRequest $args)
    {
        $result = parent::associateTransitGatewayMulticastDomain($args->toArray());
        return new AssociateTransitGatewayMulticastDomainResponse($result->toArray());
    }
}
