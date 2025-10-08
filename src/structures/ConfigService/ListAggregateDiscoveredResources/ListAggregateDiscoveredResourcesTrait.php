<?php

namespace Sunaoka\Aws\Structures\ConfigService\ListAggregateDiscoveredResources;

trait ListAggregateDiscoveredResourcesTrait
{
    /**
     * @param ListAggregateDiscoveredResourcesRequest $args
     * @return ListAggregateDiscoveredResourcesResponse
     */
    public function listAggregateDiscoveredResources(ListAggregateDiscoveredResourcesRequest $args)
    {
        $result = parent::listAggregateDiscoveredResources($args->toArray());
        return new ListAggregateDiscoveredResourcesResponse($result->toArray());
    }
}
