<?php

namespace Sunaoka\Aws\Structures\Rds\StopDBInstanceAutomatedBackupsReplication;

trait StopDBInstanceAutomatedBackupsReplicationTrait
{
    /**
     * @param StopDBInstanceAutomatedBackupsReplicationRequest $args
     * @return StopDBInstanceAutomatedBackupsReplicationResponse
     */
    public function stopDBInstanceAutomatedBackupsReplication(StopDBInstanceAutomatedBackupsReplicationRequest $args)
    {
        $result = parent::stopDBInstanceAutomatedBackupsReplication($args->toArray());
        return new StopDBInstanceAutomatedBackupsReplicationResponse($result->toArray());
    }
}
