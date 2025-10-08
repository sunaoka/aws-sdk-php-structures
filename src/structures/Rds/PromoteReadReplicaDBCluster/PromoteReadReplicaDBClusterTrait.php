<?php

namespace Sunaoka\Aws\Structures\Rds\PromoteReadReplicaDBCluster;

trait PromoteReadReplicaDBClusterTrait
{
    /**
     * @param PromoteReadReplicaDBClusterRequest $args
     * @return PromoteReadReplicaDBClusterResponse
     */
    public function promoteReadReplicaDBCluster(PromoteReadReplicaDBClusterRequest $args)
    {
        $result = parent::promoteReadReplicaDBCluster($args->toArray());
        return new PromoteReadReplicaDBClusterResponse($result->toArray());
    }
}
