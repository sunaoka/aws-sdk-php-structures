<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\AssociateResolverEndpointIpAddress;

trait AssociateResolverEndpointIpAddressTrait
{
    /**
     * @param AssociateResolverEndpointIpAddressRequest $args
     * @return AssociateResolverEndpointIpAddressResponse
     */
    public function associateResolverEndpointIpAddress(AssociateResolverEndpointIpAddressRequest $args)
    {
        $result = parent::associateResolverEndpointIpAddress($args->toArray());
        return new AssociateResolverEndpointIpAddressResponse($result->toArray());
    }
}
