<?php

namespace Sunaoka\Aws\Structures\Backup\StartBackupJob;

trait StartBackupJobTrait
{
    /**
     * @param StartBackupJobRequest $args
     * @return StartBackupJobResponse
     */
    public function startBackupJob(StartBackupJobRequest $args)
    {
        $result = parent::startBackupJob($args->toArray());
        return new StartBackupJobResponse($result->toArray());
    }
}
