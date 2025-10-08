<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateMaintenanceWindow;

trait UpdateMaintenanceWindowTrait
{
    /**
     * @param UpdateMaintenanceWindowRequest $args
     * @return UpdateMaintenanceWindowResponse
     */
    public function updateMaintenanceWindow(UpdateMaintenanceWindowRequest $args)
    {
        $result = parent::updateMaintenanceWindow($args->toArray());
        return new UpdateMaintenanceWindowResponse($result->toArray());
    }
}
