<?php

namespace Sunaoka\Aws\Structures\BackupSearch\ListSearchJobs;

trait ListSearchJobsTrait
{
    /**
     * @param ListSearchJobsRequest $args
     * @return ListSearchJobsResponse
     */
    public function listSearchJobs(ListSearchJobsRequest $args)
    {
        $result = parent::listSearchJobs($args->toArray());
        return new ListSearchJobsResponse($result->toArray());
    }
}
