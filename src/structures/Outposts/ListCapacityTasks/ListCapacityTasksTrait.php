<?php

namespace Sunaoka\Aws\Structures\Outposts\ListCapacityTasks;

trait ListCapacityTasksTrait
{
    /**
     * @param ListCapacityTasksRequest $args
     * @return ListCapacityTasksResponse
     */
    public function listCapacityTasks(ListCapacityTasksRequest $args)
    {
        $result = parent::listCapacityTasks($args->toArray());
        return new ListCapacityTasksResponse($result->toArray());
    }
}
