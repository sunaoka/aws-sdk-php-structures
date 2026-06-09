<?php

namespace Sunaoka\Aws\Structures\Odb\GetAutonomousDatabaseBackup;

trait GetAutonomousDatabaseBackupTrait
{
    /**
     * @param GetAutonomousDatabaseBackupRequest $args
     * @return GetAutonomousDatabaseBackupResponse
     */
    public function getAutonomousDatabaseBackup(GetAutonomousDatabaseBackupRequest $args)
    {
        $result = parent::getAutonomousDatabaseBackup($args->toArray());
        return new GetAutonomousDatabaseBackupResponse($result->toArray());
    }
}
