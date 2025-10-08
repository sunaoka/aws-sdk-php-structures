<?php

namespace Sunaoka\Aws\Structures\MemoryDB\UpdateMultiRegionCluster;

trait UpdateMultiRegionClusterTrait
{
    /**
     * @param UpdateMultiRegionClusterRequest $args
     * @return UpdateMultiRegionClusterResponse
     */
    public function updateMultiRegionCluster(UpdateMultiRegionClusterRequest $args)
    {
        $result = parent::updateMultiRegionCluster($args->toArray());
        return new UpdateMultiRegionClusterResponse($result->toArray());
    }
}
