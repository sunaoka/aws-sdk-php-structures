<?php

namespace Sunaoka\Aws\Structures\EMRContainers\UpdateVirtualCluster;

trait UpdateVirtualClusterTrait
{
    /**
     * @param UpdateVirtualClusterRequest $args
     * @return UpdateVirtualClusterResponse
     */
    public function updateVirtualCluster(UpdateVirtualClusterRequest $args)
    {
        $result = parent::updateVirtualCluster($args->toArray());
        return new UpdateVirtualClusterResponse($result->toArray());
    }
}
