<?php

namespace Sunaoka\Aws\Structures\Odb\CreateAutonomousDatabaseBackup;

trait CreateAutonomousDatabaseBackupTrait
{
    /**
     * @param CreateAutonomousDatabaseBackupRequest $args
     * @return CreateAutonomousDatabaseBackupResponse
     */
    public function createAutonomousDatabaseBackup(CreateAutonomousDatabaseBackupRequest $args)
    {
        $result = parent::createAutonomousDatabaseBackup($args->toArray());
        return new CreateAutonomousDatabaseBackupResponse($result->toArray());
    }
}
