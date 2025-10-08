<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBInstanceReadReplica;

trait CreateDBInstanceReadReplicaTrait
{
    /**
     * @param CreateDBInstanceReadReplicaRequest $args
     * @return CreateDBInstanceReadReplicaResponse
     */
    public function createDBInstanceReadReplica(CreateDBInstanceReadReplicaRequest $args)
    {
        $result = parent::createDBInstanceReadReplica($args->toArray());
        return new CreateDBInstanceReadReplicaResponse($result->toArray());
    }
}
