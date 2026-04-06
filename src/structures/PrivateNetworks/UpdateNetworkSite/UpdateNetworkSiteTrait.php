<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\UpdateNetworkSite;

trait UpdateNetworkSiteTrait
{
    /**
     * @param UpdateNetworkSiteRequest $args
     * @return UpdateNetworkSiteResponse
     */
    public function updateNetworkSite(UpdateNetworkSiteRequest $args)
    {
        $result = parent::updateNetworkSite($args->toArray());
        return new UpdateNetworkSiteResponse($result->toArray());
    }
}
