<?php

namespace Sunaoka\Aws\Structures\Odb\UpdateAutonomousDatabaseBackup;

trait UpdateAutonomousDatabaseBackupTrait
{
    /**
     * @param UpdateAutonomousDatabaseBackupRequest $args
     * @return UpdateAutonomousDatabaseBackupResponse
     */
    public function updateAutonomousDatabaseBackup(UpdateAutonomousDatabaseBackupRequest $args)
    {
        $result = parent::updateAutonomousDatabaseBackup($args->toArray());
        return new UpdateAutonomousDatabaseBackupResponse($result->toArray());
    }
}
