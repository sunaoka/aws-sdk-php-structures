<?php

namespace Sunaoka\Aws\Structures\Ec2\UnassignPrivateIpAddresses;

trait UnassignPrivateIpAddressesTrait
{
    /**
     * @param UnassignPrivateIpAddressesRequest $args
     * @return void
     */
    public function unassignPrivateIpAddresses(UnassignPrivateIpAddressesRequest $args)
    {
        parent::unassignPrivateIpAddresses($args->toArray());
    }
}
