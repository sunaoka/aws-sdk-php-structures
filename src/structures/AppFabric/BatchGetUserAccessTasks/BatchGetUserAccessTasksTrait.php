<?php

namespace Sunaoka\Aws\Structures\AppFabric\BatchGetUserAccessTasks;

trait BatchGetUserAccessTasksTrait
{
    /**
     * @param BatchGetUserAccessTasksRequest $args
     * @return BatchGetUserAccessTasksResponse
     */
    public function batchGetUserAccessTasks(BatchGetUserAccessTasksRequest $args)
    {
        $result = parent::batchGetUserAccessTasks($args->toArray());
        return new BatchGetUserAccessTasksResponse($result->toArray());
    }
}
