<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\DisassociateResolverEndpointIpAddress;

trait DisassociateResolverEndpointIpAddressTrait
{
    /**
     * @param DisassociateResolverEndpointIpAddressRequest $args
     * @return DisassociateResolverEndpointIpAddressResponse
     */
    public function disassociateResolverEndpointIpAddress(DisassociateResolverEndpointIpAddressRequest $args)
    {
        $result = parent::disassociateResolverEndpointIpAddress($args->toArray());
        return new DisassociateResolverEndpointIpAddressResponse($result->toArray());
    }
}
