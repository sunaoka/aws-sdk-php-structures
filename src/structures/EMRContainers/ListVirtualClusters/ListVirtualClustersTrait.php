<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListVirtualClusters;

trait ListVirtualClustersTrait
{
    /**
     * @param ListVirtualClustersRequest $args
     * @return ListVirtualClustersResponse
     */
    public function listVirtualClusters(ListVirtualClustersRequest $args)
    {
        $result = parent::listVirtualClusters($args->toArray());
        return new ListVirtualClustersResponse($result->toArray());
    }
}
