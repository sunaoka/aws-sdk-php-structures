<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ListMLDataProcessingJobs;

trait ListMLDataProcessingJobsTrait
{
    /**
     * @param ListMLDataProcessingJobsRequest $args
     * @return ListMLDataProcessingJobsResponse
     */
    public function listMLDataProcessingJobs(ListMLDataProcessingJobsRequest $args)
    {
        $result = parent::listMLDataProcessingJobs($args->toArray());
        return new ListMLDataProcessingJobsResponse($result->toArray());
    }
}
