<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\ListDbInstancesForCluster;

trait ListDbInstancesForClusterTrait
{
    /**
     * @param ListDbInstancesForClusterRequest $args
     * @return ListDbInstancesForClusterResponse
     */
    public function listDbInstancesForCluster(ListDbInstancesForClusterRequest $args)
    {
        $result = parent::listDbInstancesForCluster($args->toArray());
        return new ListDbInstancesForClusterResponse($result->toArray());
    }
}
