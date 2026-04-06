<?php

namespace Sunaoka\Aws\Structures\EntityResolution\ListIdMappingJobs;

trait ListIdMappingJobsTrait
{
    /**
     * @param ListIdMappingJobsRequest $args
     * @return ListIdMappingJobsResponse
     */
    public function listIdMappingJobs(ListIdMappingJobsRequest $args)
    {
        $result = parent::listIdMappingJobs($args->toArray());
        return new ListIdMappingJobsResponse($result->toArray());
    }
}
