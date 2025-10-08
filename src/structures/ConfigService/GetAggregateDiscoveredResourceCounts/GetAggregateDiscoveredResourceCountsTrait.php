<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetAggregateDiscoveredResourceCounts;

trait GetAggregateDiscoveredResourceCountsTrait
{
    /**
     * @param GetAggregateDiscoveredResourceCountsRequest $args
     * @return GetAggregateDiscoveredResourceCountsResponse
     */
    public function getAggregateDiscoveredResourceCounts(GetAggregateDiscoveredResourceCountsRequest $args)
    {
        $result = parent::getAggregateDiscoveredResourceCounts($args->toArray());
        return new GetAggregateDiscoveredResourceCountsResponse($result->toArray());
    }
}
