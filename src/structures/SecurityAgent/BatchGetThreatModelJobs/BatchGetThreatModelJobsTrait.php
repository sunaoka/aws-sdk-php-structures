<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetThreatModelJobs;

trait BatchGetThreatModelJobsTrait
{
    /**
     * @param BatchGetThreatModelJobsRequest $args
     * @return BatchGetThreatModelJobsResponse
     */
    public function batchGetThreatModelJobs(BatchGetThreatModelJobsRequest $args)
    {
        $result = parent::batchGetThreatModelJobs($args->toArray());
        return new BatchGetThreatModelJobsResponse($result->toArray());
    }
}
