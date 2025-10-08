<?php

namespace Sunaoka\Aws\Structures\SecretsManager\StopReplicationToReplica;

trait StopReplicationToReplicaTrait
{
    /**
     * @param StopReplicationToReplicaRequest $args
     * @return StopReplicationToReplicaResponse
     */
    public function stopReplicationToReplica(StopReplicationToReplicaRequest $args)
    {
        $result = parent::stopReplicationToReplica($args->toArray());
        return new StopReplicationToReplicaResponse($result->toArray());
    }
}
