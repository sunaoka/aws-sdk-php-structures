<?php

namespace Sunaoka\Aws\Structures\Iot\StartOnDemandAuditTask;

trait StartOnDemandAuditTaskTrait
{
    /**
     * @param StartOnDemandAuditTaskRequest $args
     * @return StartOnDemandAuditTaskResponse
     */
    public function startOnDemandAuditTask(StartOnDemandAuditTaskRequest $args)
    {
        $result = parent::startOnDemandAuditTask($args->toArray());
        return new StartOnDemandAuditTaskResponse($result->toArray());
    }
}
