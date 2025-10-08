<?php

namespace Sunaoka\Aws\Structures\Iot\StartAuditMitigationActionsTask;

trait StartAuditMitigationActionsTaskTrait
{
    /**
     * @param StartAuditMitigationActionsTaskRequest $args
     * @return StartAuditMitigationActionsTaskResponse
     */
    public function startAuditMitigationActionsTask(StartAuditMitigationActionsTaskRequest $args)
    {
        $result = parent::startAuditMitigationActionsTask($args->toArray());
        return new StartAuditMitigationActionsTaskResponse($result->toArray());
    }
}
