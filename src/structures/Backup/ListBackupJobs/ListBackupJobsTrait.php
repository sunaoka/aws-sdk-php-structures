<?php

namespace Sunaoka\Aws\Structures\Backup\ListBackupJobs;

trait ListBackupJobsTrait
{
    /**
     * @param ListBackupJobsRequest $args
     * @return ListBackupJobsResponse
     */
    public function listBackupJobs(ListBackupJobsRequest $args)
    {
        $result = parent::listBackupJobs($args->toArray());
        return new ListBackupJobsResponse($result->toArray());
    }
}
