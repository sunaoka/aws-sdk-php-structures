<?php

namespace Sunaoka\Aws\Structures\Batch\TerminateServiceJobs;

trait TerminateServiceJobsTrait
{
    /**
     * @param TerminateServiceJobsRequest $args
     * @return TerminateServiceJobsResponse
     */
    public function terminateServiceJobs(TerminateServiceJobsRequest $args)
    {
        $result = parent::terminateServiceJobs($args->toArray());
        return new TerminateServiceJobsResponse($result->toArray());
    }
}
