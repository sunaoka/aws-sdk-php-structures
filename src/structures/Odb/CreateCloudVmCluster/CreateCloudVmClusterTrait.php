<?php

namespace Sunaoka\Aws\Structures\Odb\CreateCloudVmCluster;

trait CreateCloudVmClusterTrait
{
    /**
     * @param CreateCloudVmClusterRequest $args
     * @return CreateCloudVmClusterResponse
     */
    public function createCloudVmCluster(CreateCloudVmClusterRequest $args)
    {
        $result = parent::createCloudVmCluster($args->toArray());
        return new CreateCloudVmClusterResponse($result->toArray());
    }
}
