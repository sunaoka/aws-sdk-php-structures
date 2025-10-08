<?php

namespace Sunaoka\Aws\Structures\Iot\ListAuditTasks;

trait ListAuditTasksTrait
{
    /**
     * @param ListAuditTasksRequest $args
     * @return ListAuditTasksResponse
     */
    public function listAuditTasks(ListAuditTasksRequest $args)
    {
        $result = parent::listAuditTasks($args->toArray());
        return new ListAuditTasksResponse($result->toArray());
    }
}
