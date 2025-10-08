<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyCacheCluster;

trait ModifyCacheClusterTrait
{
    /**
     * @param ModifyCacheClusterRequest $args
     * @return ModifyCacheClusterResponse
     */
    public function modifyCacheCluster(ModifyCacheClusterRequest $args)
    {
        $result = parent::modifyCacheCluster($args->toArray());
        return new ModifyCacheClusterResponse($result->toArray());
    }
}
