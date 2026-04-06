<?php

namespace Sunaoka\Aws\Structures\Odb\ListCloudVmClusters;

trait ListCloudVmClustersTrait
{
    /**
     * @param ListCloudVmClustersRequest $args
     * @return ListCloudVmClustersResponse
     */
    public function listCloudVmClusters(ListCloudVmClustersRequest $args)
    {
        $result = parent::listCloudVmClusters($args->toArray());
        return new ListCloudVmClustersResponse($result->toArray());
    }
}
