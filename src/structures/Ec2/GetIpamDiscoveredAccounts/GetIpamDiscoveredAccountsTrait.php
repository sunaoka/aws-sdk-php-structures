<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamDiscoveredAccounts;

trait GetIpamDiscoveredAccountsTrait
{
    /**
     * @param GetIpamDiscoveredAccountsRequest $args
     * @return GetIpamDiscoveredAccountsResponse
     */
    public function getIpamDiscoveredAccounts(GetIpamDiscoveredAccountsRequest $args)
    {
        $result = parent::getIpamDiscoveredAccounts($args->toArray());
        return new GetIpamDiscoveredAccountsResponse($result->toArray());
    }
}
