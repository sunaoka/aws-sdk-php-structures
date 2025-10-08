<?php

namespace Sunaoka\Aws\Structures\Iot\CancelAuditTask;

trait CancelAuditTaskTrait
{
    /**
     * @param CancelAuditTaskRequest $args
     * @return CancelAuditTaskResponse
     */
    public function cancelAuditTask(CancelAuditTaskRequest $args)
    {
        $result = parent::cancelAuditTask($args->toArray());
        return new CancelAuditTaskResponse($result->toArray());
    }
}
