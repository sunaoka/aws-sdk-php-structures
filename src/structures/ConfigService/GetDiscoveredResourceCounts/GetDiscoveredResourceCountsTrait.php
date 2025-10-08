<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetDiscoveredResourceCounts;

trait GetDiscoveredResourceCountsTrait
{
    /**
     * @param GetDiscoveredResourceCountsRequest $args
     * @return GetDiscoveredResourceCountsResponse
     */
    public function getDiscoveredResourceCounts(GetDiscoveredResourceCountsRequest $args)
    {
        $result = parent::getDiscoveredResourceCounts($args->toArray());
        return new GetDiscoveredResourceCountsResponse($result->toArray());
    }
}
