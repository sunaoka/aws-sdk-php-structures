<?php

namespace Sunaoka\Aws\Structures\Omics\ListRunTasks;

trait ListRunTasksTrait
{
    /**
     * @param ListRunTasksRequest $args
     * @return ListRunTasksResponse
     */
    public function listRunTasks(ListRunTasksRequest $args)
    {
        $result = parent::listRunTasks($args->toArray());
        return new ListRunTasksResponse($result->toArray());
    }
}
