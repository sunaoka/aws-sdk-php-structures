<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListResolverEndpointIpAddresses;

trait ListResolverEndpointIpAddressesTrait
{
    /**
     * @param ListResolverEndpointIpAddressesRequest $args
     * @return ListResolverEndpointIpAddressesResponse
     */
    public function listResolverEndpointIpAddresses(ListResolverEndpointIpAddressesRequest $args)
    {
        $result = parent::listResolverEndpointIpAddresses($args->toArray());
        return new ListResolverEndpointIpAddressesResponse($result->toArray());
    }
}
