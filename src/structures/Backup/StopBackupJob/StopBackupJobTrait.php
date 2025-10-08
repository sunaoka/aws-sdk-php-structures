<?php

namespace Sunaoka\Aws\Structures\Backup\StopBackupJob;

trait StopBackupJobTrait
{
    /**
     * @param StopBackupJobRequest $args
     * @return void
     */
    public function stopBackupJob(StopBackupJobRequest $args)
    {
        parent::stopBackupJob($args->toArray());
    }
}
