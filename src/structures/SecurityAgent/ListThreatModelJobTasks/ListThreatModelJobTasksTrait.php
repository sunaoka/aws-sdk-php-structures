<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListThreatModelJobTasks;

trait ListThreatModelJobTasksTrait
{
    /**
     * @param ListThreatModelJobTasksRequest $args
     * @return ListThreatModelJobTasksResponse
     */
    public function listThreatModelJobTasks(ListThreatModelJobTasksRequest $args)
    {
        $result = parent::listThreatModelJobTasks($args->toArray());
        return new ListThreatModelJobTasksResponse($result->toArray());
    }
}
