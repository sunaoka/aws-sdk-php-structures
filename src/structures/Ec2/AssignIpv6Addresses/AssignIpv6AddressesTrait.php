<?php

namespace Sunaoka\Aws\Structures\Ec2\AssignIpv6Addresses;

trait AssignIpv6AddressesTrait
{
    /**
     * @param AssignIpv6AddressesRequest $args
     * @return AssignIpv6AddressesResponse
     */
    public function assignIpv6Addresses(AssignIpv6AddressesRequest $args)
    {
        $result = parent::assignIpv6Addresses($args->toArray());
        return new AssignIpv6AddressesResponse($result->toArray());
    }
}
