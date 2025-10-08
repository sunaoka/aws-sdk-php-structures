<?php

namespace Sunaoka\Aws\Structures\Odb\DeleteCloudVmCluster;

trait DeleteCloudVmClusterTrait
{
    /**
     * @param DeleteCloudVmClusterRequest $args
     * @return DeleteCloudVmClusterResponse
     */
    public function deleteCloudVmCluster(DeleteCloudVmClusterRequest $args)
    {
        $result = parent::deleteCloudVmCluster($args->toArray());
        return new DeleteCloudVmClusterResponse($result->toArray());
    }
}
