<?php

namespace Sunaoka\Aws\Structures\Ssm\RegisterTaskWithMaintenanceWindow;

trait RegisterTaskWithMaintenanceWindowTrait
{
    /**
     * @param RegisterTaskWithMaintenanceWindowRequest $args
     * @return RegisterTaskWithMaintenanceWindowResponse
     */
    public function registerTaskWithMaintenanceWindow(RegisterTaskWithMaintenanceWindowRequest $args)
    {
        $result = parent::registerTaskWithMaintenanceWindow($args->toArray());
        return new RegisterTaskWithMaintenanceWindowResponse($result->toArray());
    }
}
