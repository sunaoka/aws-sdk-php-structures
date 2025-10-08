<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\UpdateDeviceInstance;

trait UpdateDeviceInstanceTrait
{
    /**
     * @param UpdateDeviceInstanceRequest $args
     * @return UpdateDeviceInstanceResponse
     */
    public function updateDeviceInstance(UpdateDeviceInstanceRequest $args)
    {
        $result = parent::updateDeviceInstance($args->toArray());
        return new UpdateDeviceInstanceResponse($result->toArray());
    }
}
