<?php

namespace Sunaoka\Aws\Structures\Ec2\AssignPrivateIpAddresses;

trait AssignPrivateIpAddressesTrait
{
    /**
     * @param AssignPrivateIpAddressesRequest $args
     * @return AssignPrivateIpAddressesResponse
     */
    public function assignPrivateIpAddresses(AssignPrivateIpAddressesRequest $args)
    {
        $result = parent::assignPrivateIpAddresses($args->toArray());
        return new AssignPrivateIpAddressesResponse($result->toArray());
    }
}
