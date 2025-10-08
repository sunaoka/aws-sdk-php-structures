<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateTransitGatewayMulticastDomain;

trait DisassociateTransitGatewayMulticastDomainTrait
{
    /**
     * @param DisassociateTransitGatewayMulticastDomainRequest $args
     * @return DisassociateTransitGatewayMulticastDomainResponse
     */
    public function disassociateTransitGatewayMulticastDomain(DisassociateTransitGatewayMulticastDomainRequest $args)
    {
        $result = parent::disassociateTransitGatewayMulticastDomain($args->toArray());
        return new DisassociateTransitGatewayMulticastDomainResponse($result->toArray());
    }
}
