<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\GetNetworkSite;

trait GetNetworkSiteTrait
{
    /**
     * @param GetNetworkSiteRequest $args
     * @return GetNetworkSiteResponse
     */
    public function getNetworkSite(GetNetworkSiteRequest $args)
    {
        $result = parent::getNetworkSite($args->toArray());
        return new GetNetworkSiteResponse($result->toArray());
    }
}
