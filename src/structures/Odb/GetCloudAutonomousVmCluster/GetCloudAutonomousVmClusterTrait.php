<?php

namespace Sunaoka\Aws\Structures\Odb\GetCloudAutonomousVmCluster;

trait GetCloudAutonomousVmClusterTrait
{
    /**
     * @param GetCloudAutonomousVmClusterRequest $args
     * @return GetCloudAutonomousVmClusterResponse
     */
    public function getCloudAutonomousVmCluster(GetCloudAutonomousVmClusterRequest $args)
    {
        $result = parent::getCloudAutonomousVmCluster($args->toArray());
        return new GetCloudAutonomousVmClusterResponse($result->toArray());
    }
}
