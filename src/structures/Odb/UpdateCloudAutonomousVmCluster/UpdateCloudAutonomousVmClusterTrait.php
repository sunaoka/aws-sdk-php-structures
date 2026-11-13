<?php

namespace Sunaoka\Aws\Structures\Odb\UpdateCloudAutonomousVmCluster;

trait UpdateCloudAutonomousVmClusterTrait
{
    /**
     * @param UpdateCloudAutonomousVmClusterRequest $args
     * @return UpdateCloudAutonomousVmClusterResponse
     */
    public function updateCloudAutonomousVmCluster(UpdateCloudAutonomousVmClusterRequest $args)
    {
        $result = parent::updateCloudAutonomousVmCluster($args->toArray());
        return new UpdateCloudAutonomousVmClusterResponse($result->toArray());
    }
}
