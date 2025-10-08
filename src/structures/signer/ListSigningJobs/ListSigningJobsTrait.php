<?php

namespace Sunaoka\Aws\Structures\signer\ListSigningJobs;

trait ListSigningJobsTrait
{
    /**
     * @param ListSigningJobsRequest $args
     * @return ListSigningJobsResponse
     */
    public function listSigningJobs(ListSigningJobsRequest $args)
    {
        $result = parent::listSigningJobs($args->toArray());
        return new ListSigningJobsResponse($result->toArray());
    }
}
