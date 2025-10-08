<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetJobs;

trait BatchGetJobsTrait
{
    /**
     * @param BatchGetJobsRequest $args
     * @return BatchGetJobsResponse
     */
    public function batchGetJobs(BatchGetJobsRequest $args)
    {
        $result = parent::batchGetJobs($args->toArray());
        return new BatchGetJobsResponse($result->toArray());
    }
}
