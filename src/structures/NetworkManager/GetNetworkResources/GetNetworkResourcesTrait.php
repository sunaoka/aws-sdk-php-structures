<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetNetworkResources;

trait GetNetworkResourcesTrait
{
    /**
     * @param GetNetworkResourcesRequest $args
     * @return GetNetworkResourcesResponse
     */
    public function getNetworkResources(GetNetworkResourcesRequest $args)
    {
        $result = parent::getNetworkResources($args->toArray());
        return new GetNetworkResourcesResponse($result->toArray());
    }
}
