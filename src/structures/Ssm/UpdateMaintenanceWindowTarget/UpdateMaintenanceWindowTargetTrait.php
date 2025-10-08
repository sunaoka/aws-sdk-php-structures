<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateMaintenanceWindowTarget;

trait UpdateMaintenanceWindowTargetTrait
{
    /**
     * @param UpdateMaintenanceWindowTargetRequest $args
     * @return UpdateMaintenanceWindowTargetResponse
     */
    public function updateMaintenanceWindowTarget(UpdateMaintenanceWindowTargetRequest $args)
    {
        $result = parent::updateMaintenanceWindowTarget($args->toArray());
        return new UpdateMaintenanceWindowTargetResponse($result->toArray());
    }
}
