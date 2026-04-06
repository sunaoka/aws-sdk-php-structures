<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\ActivateNetworkSite;

trait ActivateNetworkSiteTrait
{
    /**
     * @param ActivateNetworkSiteRequest $args
     * @return ActivateNetworkSiteResponse
     */
    public function activateNetworkSite(ActivateNetworkSiteRequest $args)
    {
        $result = parent::activateNetworkSite($args->toArray());
        return new ActivateNetworkSiteResponse($result->toArray());
    }
}
