<?php

namespace Sunaoka\Aws\Structures\EKS\RegisterCluster;

trait RegisterClusterTrait
{
    /**
     * @param RegisterClusterRequest $args
     * @return RegisterClusterResponse
     */
    public function registerCluster(RegisterClusterRequest $args)
    {
        $result = parent::registerCluster($args->toArray());
        return new RegisterClusterResponse($result->toArray());
    }
}
