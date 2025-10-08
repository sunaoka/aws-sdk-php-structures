<?php

namespace Sunaoka\Aws\Structures\Iot\CancelAuditMitigationActionsTask;

trait CancelAuditMitigationActionsTaskTrait
{
    /**
     * @param CancelAuditMitigationActionsTaskRequest $args
     * @return CancelAuditMitigationActionsTaskResponse
     */
    public function cancelAuditMitigationActionsTask(CancelAuditMitigationActionsTaskRequest $args)
    {
        $result = parent::cancelAuditMitigationActionsTask($args->toArray());
        return new CancelAuditMitigationActionsTaskResponse($result->toArray());
    }
}
