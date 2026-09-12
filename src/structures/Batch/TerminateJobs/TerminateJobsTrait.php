<?php

namespace Sunaoka\Aws\Structures\Batch\TerminateJobs;

trait TerminateJobsTrait
{
    /**
     * @param TerminateJobsRequest $args
     * @return TerminateJobsResponse
     */
    public function terminateJobs(TerminateJobsRequest $args)
    {
        $result = parent::terminateJobs($args->toArray());
        return new TerminateJobsResponse($result->toArray());
    }
}
