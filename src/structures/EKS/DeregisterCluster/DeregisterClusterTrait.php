<?php

namespace Sunaoka\Aws\Structures\EKS\DeregisterCluster;

trait DeregisterClusterTrait
{
    /**
     * @param DeregisterClusterRequest $args
     * @return DeregisterClusterResponse
     */
    public function deregisterCluster(DeregisterClusterRequest $args)
    {
        $result = parent::deregisterCluster($args->toArray());
        return new DeregisterClusterResponse($result->toArray());
    }
}
