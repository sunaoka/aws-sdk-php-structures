<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\ListTagSyncTasks;

trait ListTagSyncTasksTrait
{
    /**
     * @param ListTagSyncTasksRequest $args
     * @return ListTagSyncTasksResponse
     */
    public function listTagSyncTasks(ListTagSyncTasksRequest $args)
    {
        $result = parent::listTagSyncTasks($args->toArray());
        return new ListTagSyncTasksResponse($result->toArray());
    }
}
