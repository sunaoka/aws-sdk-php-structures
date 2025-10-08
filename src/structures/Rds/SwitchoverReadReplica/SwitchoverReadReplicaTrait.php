<?php

namespace Sunaoka\Aws\Structures\Rds\SwitchoverReadReplica;

trait SwitchoverReadReplicaTrait
{
    /**
     * @param SwitchoverReadReplicaRequest $args
     * @return SwitchoverReadReplicaResponse
     */
    public function switchoverReadReplica(SwitchoverReadReplicaRequest $args)
    {
        $result = parent::switchoverReadReplica($args->toArray());
        return new SwitchoverReadReplicaResponse($result->toArray());
    }
}
