<?php

namespace Sunaoka\Aws\Structures\Rds\CreateGlobalCluster;

trait CreateGlobalClusterTrait
{
    /**
     * @param CreateGlobalClusterRequest $args
     * @return CreateGlobalClusterResponse
     */
    public function createGlobalCluster(CreateGlobalClusterRequest $args)
    {
        $result = parent::createGlobalCluster($args->toArray());
        return new CreateGlobalClusterResponse($result->toArray());
    }
}
