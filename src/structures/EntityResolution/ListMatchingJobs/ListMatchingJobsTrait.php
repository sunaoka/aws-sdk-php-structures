<?php

namespace Sunaoka\Aws\Structures\EntityResolution\ListMatchingJobs;

trait ListMatchingJobsTrait
{
    /**
     * @param ListMatchingJobsRequest $args
     * @return ListMatchingJobsResponse
     */
    public function listMatchingJobs(ListMatchingJobsRequest $args)
    {
        $result = parent::listMatchingJobs($args->toArray());
        return new ListMatchingJobsResponse($result->toArray());
    }
}
