<?php

namespace Sunaoka\Aws\Structures\Odb\GetCloudVmCluster;

trait GetCloudVmClusterTrait
{
    /**
     * @param GetCloudVmClusterRequest $args
     * @return GetCloudVmClusterResponse
     */
    public function getCloudVmCluster(GetCloudVmClusterRequest $args)
    {
        $result = parent::getCloudVmCluster($args->toArray());
        return new GetCloudVmClusterResponse($result->toArray());
    }
}
