<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\CreateNetworkSite;

trait CreateNetworkSiteTrait
{
    /**
     * @param CreateNetworkSiteRequest $args
     * @return CreateNetworkSiteResponse
     */
    public function createNetworkSite(CreateNetworkSiteRequest $args)
    {
        $result = parent::createNetworkSite($args->toArray());
        return new CreateNetworkSiteResponse($result->toArray());
    }
}
