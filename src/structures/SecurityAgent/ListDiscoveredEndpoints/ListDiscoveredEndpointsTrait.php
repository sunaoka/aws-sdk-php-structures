<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListDiscoveredEndpoints;

trait ListDiscoveredEndpointsTrait
{
    /**
     * @param ListDiscoveredEndpointsRequest $args
     * @return ListDiscoveredEndpointsResponse
     */
    public function listDiscoveredEndpoints(ListDiscoveredEndpointsRequest $args)
    {
        $result = parent::listDiscoveredEndpoints($args->toArray());
        return new ListDiscoveredEndpointsResponse($result->toArray());
    }
}
