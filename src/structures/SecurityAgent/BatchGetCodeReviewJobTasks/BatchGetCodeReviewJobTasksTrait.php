<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetCodeReviewJobTasks;

trait BatchGetCodeReviewJobTasksTrait
{
    /**
     * @param BatchGetCodeReviewJobTasksRequest $args
     * @return BatchGetCodeReviewJobTasksResponse
     */
    public function batchGetCodeReviewJobTasks(BatchGetCodeReviewJobTasksRequest $args)
    {
        $result = parent::batchGetCodeReviewJobTasks($args->toArray());
        return new BatchGetCodeReviewJobTasksResponse($result->toArray());
    }
}
