<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetCodeReviewJobs;

trait BatchGetCodeReviewJobsTrait
{
    /**
     * @param BatchGetCodeReviewJobsRequest $args
     * @return BatchGetCodeReviewJobsResponse
     */
    public function batchGetCodeReviewJobs(BatchGetCodeReviewJobsRequest $args)
    {
        $result = parent::batchGetCodeReviewJobs($args->toArray());
        return new BatchGetCodeReviewJobsResponse($result->toArray());
    }
}
