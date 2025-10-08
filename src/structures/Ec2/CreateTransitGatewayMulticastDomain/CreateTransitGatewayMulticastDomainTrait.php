<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayMulticastDomain;

trait CreateTransitGatewayMulticastDomainTrait
{
    /**
     * @param CreateTransitGatewayMulticastDomainRequest $args
     * @return CreateTransitGatewayMulticastDomainResponse
     */
    public function createTransitGatewayMulticastDomain(CreateTransitGatewayMulticastDomainRequest $args)
    {
        $result = parent::createTransitGatewayMulticastDomain($args->toArray());
        return new CreateTransitGatewayMulticastDomainResponse($result->toArray());
    }
}
