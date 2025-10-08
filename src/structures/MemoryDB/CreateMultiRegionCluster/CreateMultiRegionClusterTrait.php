<?php

namespace Sunaoka\Aws\Structures\MemoryDB\CreateMultiRegionCluster;

trait CreateMultiRegionClusterTrait
{
    /**
     * @param CreateMultiRegionClusterRequest $args
     * @return CreateMultiRegionClusterResponse
     */
    public function createMultiRegionCluster(CreateMultiRegionClusterRequest $args)
    {
        $result = parent::createMultiRegionCluster($args->toArray());
        return new CreateMultiRegionClusterResponse($result->toArray());
    }
}
