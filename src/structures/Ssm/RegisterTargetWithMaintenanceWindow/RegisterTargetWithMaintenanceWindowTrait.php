<?php

namespace Sunaoka\Aws\Structures\Ssm\RegisterTargetWithMaintenanceWindow;

trait RegisterTargetWithMaintenanceWindowTrait
{
    /**
     * @param RegisterTargetWithMaintenanceWindowRequest $args
     * @return RegisterTargetWithMaintenanceWindowResponse
     */
    public function registerTargetWithMaintenanceWindow(RegisterTargetWithMaintenanceWindowRequest $args)
    {
        $result = parent::registerTargetWithMaintenanceWindow($args->toArray());
        return new RegisterTargetWithMaintenanceWindowResponse($result->toArray());
    }
}
