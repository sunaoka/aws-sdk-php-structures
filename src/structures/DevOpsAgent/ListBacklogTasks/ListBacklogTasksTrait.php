<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListBacklogTasks;

trait ListBacklogTasksTrait
{
    /**
     * @param ListBacklogTasksRequest $args
     * @return ListBacklogTasksResponse
     */
    public function listBacklogTasks(ListBacklogTasksRequest $args)
    {
        $result = parent::listBacklogTasks($args->toArray());
        return new ListBacklogTasksResponse($result->toArray());
    }
}
