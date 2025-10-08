<?php

namespace Sunaoka\Aws\Structures\Odb\DeleteCloudAutonomousVmCluster;

trait DeleteCloudAutonomousVmClusterTrait
{
    /**
     * @param DeleteCloudAutonomousVmClusterRequest $args
     * @return DeleteCloudAutonomousVmClusterResponse
     */
    public function deleteCloudAutonomousVmCluster(DeleteCloudAutonomousVmClusterRequest $args)
    {
        $result = parent::deleteCloudAutonomousVmCluster($args->toArray());
        return new DeleteCloudAutonomousVmClusterResponse($result->toArray());
    }
}
