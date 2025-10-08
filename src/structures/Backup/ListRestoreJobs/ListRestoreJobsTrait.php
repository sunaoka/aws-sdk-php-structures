<?php

namespace Sunaoka\Aws\Structures\Backup\ListRestoreJobs;

trait ListRestoreJobsTrait
{
    /**
     * @param ListRestoreJobsRequest $args
     * @return ListRestoreJobsResponse
     */
    public function listRestoreJobs(ListRestoreJobsRequest $args)
    {
        $result = parent::listRestoreJobs($args->toArray());
        return new ListRestoreJobsResponse($result->toArray());
    }
}
