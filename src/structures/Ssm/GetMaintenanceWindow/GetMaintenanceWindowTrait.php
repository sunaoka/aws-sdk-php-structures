<?php

namespace Sunaoka\Aws\Structures\Ssm\GetMaintenanceWindow;

trait GetMaintenanceWindowTrait
{
    /**
     * @param GetMaintenanceWindowRequest $args
     * @return GetMaintenanceWindowResponse
     */
    public function getMaintenanceWindow(GetMaintenanceWindowRequest $args)
    {
        $result = parent::getMaintenanceWindow($args->toArray());
        return new GetMaintenanceWindowResponse($result->toArray());
    }
}
