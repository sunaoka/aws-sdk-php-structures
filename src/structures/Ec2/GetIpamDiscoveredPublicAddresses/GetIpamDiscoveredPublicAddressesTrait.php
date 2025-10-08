<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamDiscoveredPublicAddresses;

trait GetIpamDiscoveredPublicAddressesTrait
{
    /**
     * @param GetIpamDiscoveredPublicAddressesRequest $args
     * @return GetIpamDiscoveredPublicAddressesResponse
     */
    public function getIpamDiscoveredPublicAddresses(GetIpamDiscoveredPublicAddressesRequest $args)
    {
        $result = parent::getIpamDiscoveredPublicAddresses($args->toArray());
        return new GetIpamDiscoveredPublicAddressesResponse($result->toArray());
    }
}
