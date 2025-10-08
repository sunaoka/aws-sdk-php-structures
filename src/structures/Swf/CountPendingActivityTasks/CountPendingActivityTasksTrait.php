<?php

namespace Sunaoka\Aws\Structures\Swf\CountPendingActivityTasks;

trait CountPendingActivityTasksTrait
{
    /**
     * @param CountPendingActivityTasksRequest $args
     * @return CountPendingActivityTasksResponse
     */
    public function countPendingActivityTasks(CountPendingActivityTasksRequest $args)
    {
        $result = parent::countPendingActivityTasks($args->toArray());
        return new CountPendingActivityTasksResponse($result->toArray());
    }
}
