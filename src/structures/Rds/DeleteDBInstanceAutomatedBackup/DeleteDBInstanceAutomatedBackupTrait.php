<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteDBInstanceAutomatedBackup;

trait DeleteDBInstanceAutomatedBackupTrait
{
    /**
     * @param DeleteDBInstanceAutomatedBackupRequest $args
     * @return DeleteDBInstanceAutomatedBackupResponse
     */
    public function deleteDBInstanceAutomatedBackup(DeleteDBInstanceAutomatedBackupRequest $args)
    {
        $result = parent::deleteDBInstanceAutomatedBackup($args->toArray());
        return new DeleteDBInstanceAutomatedBackupResponse($result->toArray());
    }
}
