<?php

namespace Sunaoka\Aws\Structures\DocDBElastic\StartCluster;

trait StartClusterTrait
{
    /**
     * @param StartClusterRequest $args
     * @return StartClusterResponse
     */
    public function startCluster(StartClusterRequest $args)
    {
        $result = parent::startCluster($args->toArray());
        return new StartClusterResponse($result->toArray());
    }
}
