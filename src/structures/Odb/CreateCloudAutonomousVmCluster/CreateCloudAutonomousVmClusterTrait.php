<?php

namespace Sunaoka\Aws\Structures\Odb\CreateCloudAutonomousVmCluster;

trait CreateCloudAutonomousVmClusterTrait
{
    /**
     * @param CreateCloudAutonomousVmClusterRequest $args
     * @return CreateCloudAutonomousVmClusterResponse
     */
    public function createCloudAutonomousVmCluster(CreateCloudAutonomousVmClusterRequest $args)
    {
        $result = parent::createCloudAutonomousVmCluster($args->toArray());
        return new CreateCloudAutonomousVmClusterResponse($result->toArray());
    }
}
