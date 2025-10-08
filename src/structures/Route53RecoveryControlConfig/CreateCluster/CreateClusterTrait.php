<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\CreateCluster;

trait CreateClusterTrait
{
    /**
     * @param CreateClusterRequest $args
     * @return CreateClusterResponse
     */
    public function createCluster(CreateClusterRequest $args)
    {
        $result = parent::createCluster($args->toArray());
        return new CreateClusterResponse($result->toArray());
    }
}
