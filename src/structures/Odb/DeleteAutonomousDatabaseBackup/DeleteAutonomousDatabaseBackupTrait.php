<?php

namespace Sunaoka\Aws\Structures\Odb\DeleteAutonomousDatabaseBackup;

trait DeleteAutonomousDatabaseBackupTrait
{
    /**
     * @param DeleteAutonomousDatabaseBackupRequest $args
     * @return DeleteAutonomousDatabaseBackupResponse
     */
    public function deleteAutonomousDatabaseBackup(DeleteAutonomousDatabaseBackupRequest $args)
    {
        $result = parent::deleteAutonomousDatabaseBackup($args->toArray());
        return new DeleteAutonomousDatabaseBackupResponse($result->toArray());
    }
}
