<?php

namespace Sunaoka\Aws\Structures\DataSync\ListTasks;

trait ListTasksTrait
{
    /**
     * @param ListTasksRequest $args
     * @return ListTasksResponse
     */
    public function listTasks(ListTasksRequest $args)
    {
        $result = parent::listTasks($args->toArray());
        return new ListTasksResponse($result->toArray());
    }
}
