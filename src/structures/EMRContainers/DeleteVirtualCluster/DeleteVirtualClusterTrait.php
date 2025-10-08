<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DeleteVirtualCluster;

trait DeleteVirtualClusterTrait
{
    /**
     * @param DeleteVirtualClusterRequest $args
     * @return DeleteVirtualClusterResponse
     */
    public function deleteVirtualCluster(DeleteVirtualClusterRequest $args)
    {
        $result = parent::deleteVirtualCluster($args->toArray());
        return new DeleteVirtualClusterResponse($result->toArray());
    }
}
