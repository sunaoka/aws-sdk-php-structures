<?php

namespace Sunaoka\Aws\Structures\ElastiCache\RebootCacheCluster;

trait RebootCacheClusterTrait
{
    /**
     * @param RebootCacheClusterRequest $args
     * @return RebootCacheClusterResponse
     */
    public function rebootCacheCluster(RebootCacheClusterRequest $args)
    {
        $result = parent::rebootCacheCluster($args->toArray());
        return new RebootCacheClusterResponse($result->toArray());
    }
}
