<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\ListNetworkSites;

trait ListNetworkSitesTrait
{
    /**
     * @param ListNetworkSitesRequest $args
     * @return ListNetworkSitesResponse
     */
    public function listNetworkSites(ListNetworkSitesRequest $args)
    {
        $result = parent::listNetworkSites($args->toArray());
        return new ListNetworkSitesResponse($result->toArray());
    }
}
