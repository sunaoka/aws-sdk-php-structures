<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteDBClusterAutomatedBackup;

trait DeleteDBClusterAutomatedBackupTrait
{
    /**
     * @param DeleteDBClusterAutomatedBackupRequest $args
     * @return DeleteDBClusterAutomatedBackupResponse
     */
    public function deleteDBClusterAutomatedBackup(DeleteDBClusterAutomatedBackupRequest $args)
    {
        $result = parent::deleteDBClusterAutomatedBackup($args->toArray());
        return new DeleteDBClusterAutomatedBackupResponse($result->toArray());
    }
}
