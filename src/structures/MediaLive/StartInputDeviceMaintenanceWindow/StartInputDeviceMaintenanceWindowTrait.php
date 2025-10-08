<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartInputDeviceMaintenanceWindow;

trait StartInputDeviceMaintenanceWindowTrait
{
    /**
     * @param StartInputDeviceMaintenanceWindowRequest $args
     * @return StartInputDeviceMaintenanceWindowResponse
     */
    public function startInputDeviceMaintenanceWindow(StartInputDeviceMaintenanceWindowRequest $args)
    {
        $result = parent::startInputDeviceMaintenanceWindow($args->toArray());
        return new StartInputDeviceMaintenanceWindowResponse($result->toArray());
    }
}
