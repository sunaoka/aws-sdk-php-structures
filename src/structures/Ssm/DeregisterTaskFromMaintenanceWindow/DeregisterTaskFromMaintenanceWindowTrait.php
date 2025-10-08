<?php

namespace Sunaoka\Aws\Structures\Ssm\DeregisterTaskFromMaintenanceWindow;

trait DeregisterTaskFromMaintenanceWindowTrait
{
    /**
     * @param DeregisterTaskFromMaintenanceWindowRequest $args
     * @return DeregisterTaskFromMaintenanceWindowResponse
     */
    public function deregisterTaskFromMaintenanceWindow(DeregisterTaskFromMaintenanceWindowRequest $args)
    {
        $result = parent::deregisterTaskFromMaintenanceWindow($args->toArray());
        return new DeregisterTaskFromMaintenanceWindowResponse($result->toArray());
    }
}
