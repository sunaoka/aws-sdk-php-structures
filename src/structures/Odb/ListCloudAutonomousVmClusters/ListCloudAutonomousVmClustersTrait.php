<?php

namespace Sunaoka\Aws\Structures\Odb\ListCloudAutonomousVmClusters;

trait ListCloudAutonomousVmClustersTrait
{
    /**
     * @param ListCloudAutonomousVmClustersRequest $args
     * @return ListCloudAutonomousVmClustersResponse
     */
    public function listCloudAutonomousVmClusters(ListCloudAutonomousVmClustersRequest $args)
    {
        $result = parent::listCloudAutonomousVmClusters($args->toArray());
        return new ListCloudAutonomousVmClustersResponse($result->toArray());
    }
}
