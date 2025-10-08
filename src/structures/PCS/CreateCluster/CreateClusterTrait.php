<?php

namespace Sunaoka\Aws\Structures\PCS\CreateCluster;

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
