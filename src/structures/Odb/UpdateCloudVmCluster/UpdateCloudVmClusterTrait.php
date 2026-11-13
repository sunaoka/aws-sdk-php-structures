<?php

namespace Sunaoka\Aws\Structures\Odb\UpdateCloudVmCluster;

trait UpdateCloudVmClusterTrait
{
    /**
     * @param UpdateCloudVmClusterRequest $args
     * @return UpdateCloudVmClusterResponse
     */
    public function updateCloudVmCluster(UpdateCloudVmClusterRequest $args)
    {
        $result = parent::updateCloudVmCluster($args->toArray());
        return new UpdateCloudVmClusterResponse($result->toArray());
    }
}
