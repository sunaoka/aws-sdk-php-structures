<?php

namespace Sunaoka\Aws\Structures\Ssm\DeregisterTargetFromMaintenanceWindow;

trait DeregisterTargetFromMaintenanceWindowTrait
{
    /**
     * @param DeregisterTargetFromMaintenanceWindowRequest $args
     * @return DeregisterTargetFromMaintenanceWindowResponse
     */
    public function deregisterTargetFromMaintenanceWindow(DeregisterTargetFromMaintenanceWindowRequest $args)
    {
        $result = parent::deregisterTargetFromMaintenanceWindow($args->toArray());
        return new DeregisterTargetFromMaintenanceWindowResponse($result->toArray());
    }
}
