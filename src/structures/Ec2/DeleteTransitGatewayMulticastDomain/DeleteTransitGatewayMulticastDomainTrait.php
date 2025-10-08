<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGatewayMulticastDomain;

trait DeleteTransitGatewayMulticastDomainTrait
{
    /**
     * @param DeleteTransitGatewayMulticastDomainRequest $args
     * @return DeleteTransitGatewayMulticastDomainResponse
     */
    public function deleteTransitGatewayMulticastDomain(DeleteTransitGatewayMulticastDomainRequest $args)
    {
        $result = parent::deleteTransitGatewayMulticastDomain($args->toArray());
        return new DeleteTransitGatewayMulticastDomainResponse($result->toArray());
    }
}
