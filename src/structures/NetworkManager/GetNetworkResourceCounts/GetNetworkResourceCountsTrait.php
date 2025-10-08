<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetNetworkResourceCounts;

trait GetNetworkResourceCountsTrait
{
    /**
     * @param GetNetworkResourceCountsRequest $args
     * @return GetNetworkResourceCountsResponse
     */
    public function getNetworkResourceCounts(GetNetworkResourceCountsRequest $args)
    {
        $result = parent::getNetworkResourceCounts($args->toArray());
        return new GetNetworkResourceCountsResponse($result->toArray());
    }
}
