<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateMaintenanceWindowTask;

trait UpdateMaintenanceWindowTaskTrait
{
    /**
     * @param UpdateMaintenanceWindowTaskRequest $args
     * @return UpdateMaintenanceWindowTaskResponse
     */
    public function updateMaintenanceWindowTask(UpdateMaintenanceWindowTaskRequest $args)
    {
        $result = parent::updateMaintenanceWindowTask($args->toArray());
        return new UpdateMaintenanceWindowTaskResponse($result->toArray());
    }
}
