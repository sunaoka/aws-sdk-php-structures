<?php

namespace Sunaoka\Aws\Structures\Ssm\GetMaintenanceWindowExecutionTask;

trait GetMaintenanceWindowExecutionTaskTrait
{
    /**
     * @param GetMaintenanceWindowExecutionTaskRequest $args
     * @return GetMaintenanceWindowExecutionTaskResponse
     */
    public function getMaintenanceWindowExecutionTask(GetMaintenanceWindowExecutionTaskRequest $args)
    {
        $result = parent::getMaintenanceWindowExecutionTask($args->toArray());
        return new GetMaintenanceWindowExecutionTaskResponse($result->toArray());
    }
}
