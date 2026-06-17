<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetThreatModelJobTasks;

trait BatchGetThreatModelJobTasksTrait
{
    /**
     * @param BatchGetThreatModelJobTasksRequest $args
     * @return BatchGetThreatModelJobTasksResponse
     */
    public function batchGetThreatModelJobTasks(BatchGetThreatModelJobTasksRequest $args)
    {
        $result = parent::batchGetThreatModelJobTasks($args->toArray());
        return new BatchGetThreatModelJobTasksResponse($result->toArray());
    }
}
