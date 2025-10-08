<?php

namespace Sunaoka\Aws\Structures\Rds\PromoteReadReplica;

trait PromoteReadReplicaTrait
{
    /**
     * @param PromoteReadReplicaRequest $args
     * @return PromoteReadReplicaResponse
     */
    public function promoteReadReplica(PromoteReadReplicaRequest $args)
    {
        $result = parent::promoteReadReplica($args->toArray());
        return new PromoteReadReplicaResponse($result->toArray());
    }
}
