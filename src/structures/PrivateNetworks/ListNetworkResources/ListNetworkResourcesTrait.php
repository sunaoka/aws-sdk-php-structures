<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\ListNetworkResources;

trait ListNetworkResourcesTrait
{
    /**
     * @param ListNetworkResourcesRequest $args
     * @return ListNetworkResourcesResponse
     */
    public function listNetworkResources(ListNetworkResourcesRequest $args)
    {
        $result = parent::listNetworkResources($args->toArray());
        return new ListNetworkResourcesResponse($result->toArray());
    }
}
