<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\DeleteNetworkSite;

trait DeleteNetworkSiteTrait
{
    /**
     * @param DeleteNetworkSiteRequest $args
     * @return DeleteNetworkSiteResponse
     */
    public function deleteNetworkSite(DeleteNetworkSiteRequest $args)
    {
        $result = parent::deleteNetworkSite($args->toArray());
        return new DeleteNetworkSiteResponse($result->toArray());
    }
}
