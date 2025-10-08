<?php

namespace Sunaoka\Aws\Structures\Rds\StartDBInstanceAutomatedBackupsReplication;

trait StartDBInstanceAutomatedBackupsReplicationTrait
{
    /**
     * @param StartDBInstanceAutomatedBackupsReplicationRequest $args
     * @return StartDBInstanceAutomatedBackupsReplicationResponse
     */
    public function startDBInstanceAutomatedBackupsReplication(StartDBInstanceAutomatedBackupsReplicationRequest $args)
    {
        $result = parent::startDBInstanceAutomatedBackupsReplication($args->toArray());
        return new StartDBInstanceAutomatedBackupsReplicationResponse($result->toArray());
    }
}
