<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DeleteMultiRegionCluster;

trait DeleteMultiRegionClusterTrait
{
    /**
     * @param DeleteMultiRegionClusterRequest $args
     * @return DeleteMultiRegionClusterResponse
     */
    public function deleteMultiRegionCluster(DeleteMultiRegionClusterRequest $args)
    {
        $result = parent::deleteMultiRegionCluster($args->toArray());
        return new DeleteMultiRegionClusterResponse($result->toArray());
    }
}
