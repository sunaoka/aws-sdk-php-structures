<?php

namespace Sunaoka\Aws\Structures\Iot\ListAuditMitigationActionsTasks;

trait ListAuditMitigationActionsTasksTrait
{
    /**
     * @param ListAuditMitigationActionsTasksRequest $args
     * @return ListAuditMitigationActionsTasksResponse
     */
    public function listAuditMitigationActionsTasks(ListAuditMitigationActionsTasksRequest $args)
    {
        $result = parent::listAuditMitigationActionsTasks($args->toArray());
        return new ListAuditMitigationActionsTasksResponse($result->toArray());
    }
}
