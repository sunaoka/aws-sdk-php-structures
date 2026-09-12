<?php

namespace Sunaoka\Aws\Structures\Batch\CancelJobs;

trait CancelJobsTrait
{
    /**
     * @param CancelJobsRequest $args
     * @return CancelJobsResponse
     */
    public function cancelJobs(CancelJobsRequest $args)
    {
        $result = parent::cancelJobs($args->toArray());
        return new CancelJobsResponse($result->toArray());
    }
}
