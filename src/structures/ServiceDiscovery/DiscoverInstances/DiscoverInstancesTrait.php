<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\DiscoverInstances;

trait DiscoverInstancesTrait
{
    /**
     * @param DiscoverInstancesRequest $args
     * @return DiscoverInstancesResponse
     */
    public function discoverInstances(DiscoverInstancesRequest $args)
    {
        $result = parent::discoverInstances($args->toArray());
        return new DiscoverInstancesResponse($result->toArray());
    }
}
