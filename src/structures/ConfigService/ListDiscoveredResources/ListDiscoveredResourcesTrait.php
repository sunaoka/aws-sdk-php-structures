<?php

namespace Sunaoka\Aws\Structures\ConfigService\ListDiscoveredResources;

trait ListDiscoveredResourcesTrait
{
    /**
     * @param ListDiscoveredResourcesRequest $args
     * @return ListDiscoveredResourcesResponse
     */
    public function listDiscoveredResources(ListDiscoveredResourcesRequest $args)
    {
        $result = parent::listDiscoveredResources($args->toArray());
        return new ListDiscoveredResourcesResponse($result->toArray());
    }
}
