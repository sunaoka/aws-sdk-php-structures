<?php

namespace Sunaoka\Aws\Structures\Iot\ListAuditMitigationActionsExecutions;

trait ListAuditMitigationActionsExecutionsTrait
{
    /**
     * @param ListAuditMitigationActionsExecutionsRequest $args
     * @return ListAuditMitigationActionsExecutionsResponse
     */
    public function listAuditMitigationActionsExecutions(ListAuditMitigationActionsExecutionsRequest $args)
    {
        $result = parent::listAuditMitigationActionsExecutions($args->toArray());
        return new ListAuditMitigationActionsExecutionsResponse($result->toArray());
    }
}
