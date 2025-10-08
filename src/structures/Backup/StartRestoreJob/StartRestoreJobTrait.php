<?php

namespace Sunaoka\Aws\Structures\Backup\StartRestoreJob;

trait StartRestoreJobTrait
{
    /**
     * @param StartRestoreJobRequest $args
     * @return StartRestoreJobResponse
     */
    public function startRestoreJob(StartRestoreJobRequest $args)
    {
        $result = parent::startRestoreJob($args->toArray());
        return new StartRestoreJobResponse($result->toArray());
    }
}
