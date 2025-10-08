<?php

namespace Sunaoka\Aws\Structures\Backup\ListCopyJobs;

trait ListCopyJobsTrait
{
    /**
     * @param ListCopyJobsRequest $args
     * @return ListCopyJobsResponse
     */
    public function listCopyJobs(ListCopyJobsRequest $args)
    {
        $result = parent::listCopyJobs($args->toArray());
        return new ListCopyJobsResponse($result->toArray());
    }
}
