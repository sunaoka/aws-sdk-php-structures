<?php

namespace Sunaoka\Aws\Structures\Ssm\GetMaintenanceWindowTask;

trait GetMaintenanceWindowTaskTrait
{
    /**
     * @param GetMaintenanceWindowTaskRequest $args
     * @return GetMaintenanceWindowTaskResponse
     */
    public function getMaintenanceWindowTask(GetMaintenanceWindowTaskRequest $args)
    {
        $result = parent::getMaintenanceWindowTask($args->toArray());
        return new GetMaintenanceWindowTaskResponse($result->toArray());
    }
}
