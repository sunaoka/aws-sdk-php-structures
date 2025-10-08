<?php

namespace Sunaoka\Aws\Structures\Ssm\DeleteMaintenanceWindow;

trait DeleteMaintenanceWindowTrait
{
    /**
     * @param DeleteMaintenanceWindowRequest $args
     * @return DeleteMaintenanceWindowResponse
     */
    public function deleteMaintenanceWindow(DeleteMaintenanceWindowRequest $args)
    {
        $result = parent::deleteMaintenanceWindow($args->toArray());
        return new DeleteMaintenanceWindowResponse($result->toArray());
    }
}
