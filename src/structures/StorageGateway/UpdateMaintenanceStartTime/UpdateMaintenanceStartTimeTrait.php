<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateMaintenanceStartTime;

trait UpdateMaintenanceStartTimeTrait
{
    /**
     * @param UpdateMaintenanceStartTimeRequest $args
     * @return UpdateMaintenanceStartTimeResponse
     */
    public function updateMaintenanceStartTime(UpdateMaintenanceStartTimeRequest $args)
    {
        $result = parent::updateMaintenanceStartTime($args->toArray());
        return new UpdateMaintenanceStartTimeResponse($result->toArray());
    }
}
