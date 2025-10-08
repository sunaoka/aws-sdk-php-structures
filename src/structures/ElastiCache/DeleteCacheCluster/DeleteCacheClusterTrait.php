<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DeleteCacheCluster;

trait DeleteCacheClusterTrait
{
    /**
     * @param DeleteCacheClusterRequest $args
     * @return DeleteCacheClusterResponse
     */
    public function deleteCacheCluster(DeleteCacheClusterRequest $args)
    {
        $result = parent::deleteCacheCluster($args->toArray());
        return new DeleteCacheClusterResponse($result->toArray());
    }
}
