<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListCodeReviewJobTasks;

trait ListCodeReviewJobTasksTrait
{
    /**
     * @param ListCodeReviewJobTasksRequest $args
     * @return ListCodeReviewJobTasksResponse
     */
    public function listCodeReviewJobTasks(ListCodeReviewJobTasksRequest $args)
    {
        $result = parent::listCodeReviewJobTasks($args->toArray());
        return new ListCodeReviewJobTasksResponse($result->toArray());
    }
}
