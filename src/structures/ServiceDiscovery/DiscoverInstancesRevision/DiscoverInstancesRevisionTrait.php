<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\DiscoverInstancesRevision;

trait DiscoverInstancesRevisionTrait
{
    /**
     * @param DiscoverInstancesRevisionRequest $args
     * @return DiscoverInstancesRevisionResponse
     */
    public function discoverInstancesRevision(DiscoverInstancesRevisionRequest $args)
    {
        $result = parent::discoverInstancesRevision($args->toArray());
        return new DiscoverInstancesRevisionResponse($result->toArray());
    }
}
