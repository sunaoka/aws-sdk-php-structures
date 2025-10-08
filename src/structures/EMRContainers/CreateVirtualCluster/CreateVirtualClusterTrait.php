<?php

namespace Sunaoka\Aws\Structures\EMRContainers\CreateVirtualCluster;

trait CreateVirtualClusterTrait
{
    /**
     * @param CreateVirtualClusterRequest $args
     * @return CreateVirtualClusterResponse
     */
    public function createVirtualCluster(CreateVirtualClusterRequest $args)
    {
        $result = parent::createVirtualCluster($args->toArray());
        return new CreateVirtualClusterResponse($result->toArray());
    }
}
