<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateCacheCluster;

trait CreateCacheClusterTrait
{
    /**
     * @param CreateCacheClusterRequest $args
     * @return CreateCacheClusterResponse
     */
    public function createCacheCluster(CreateCacheClusterRequest $args)
    {
        $result = parent::createCacheCluster($args->toArray());
        return new CreateCacheClusterResponse($result->toArray());
    }
}
