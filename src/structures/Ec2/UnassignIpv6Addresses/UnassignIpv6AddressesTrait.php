<?php

namespace Sunaoka\Aws\Structures\Ec2\UnassignIpv6Addresses;

trait UnassignIpv6AddressesTrait
{
    /**
     * @param UnassignIpv6AddressesRequest $args
     * @return UnassignIpv6AddressesResponse
     */
    public function unassignIpv6Addresses(UnassignIpv6AddressesRequest $args)
    {
        $result = parent::unassignIpv6Addresses($args->toArray());
        return new UnassignIpv6AddressesResponse($result->toArray());
    }
}
