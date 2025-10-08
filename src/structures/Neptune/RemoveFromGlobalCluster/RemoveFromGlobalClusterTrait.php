<?php

namespace Sunaoka\Aws\Structures\Neptune\RemoveFromGlobalCluster;

trait RemoveFromGlobalClusterTrait
{
    /**
     * @param RemoveFromGlobalClusterRequest $args
     * @return RemoveFromGlobalClusterResponse
     */
    public function removeFromGlobalCluster(RemoveFromGlobalClusterRequest $args)
    {
        $result = parent::removeFromGlobalCluster($args->toArray());
        return new RemoveFromGlobalClusterResponse($result->toArray());
    }
}
