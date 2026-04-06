<?php

namespace Sunaoka\Aws\Structures\IoT1ClickDevicesService\UpdateDeviceState;

trait UpdateDeviceStateTrait
{
    /**
     * @param UpdateDeviceStateRequest $args
     * @return UpdateDeviceStateResponse
     */
    public function updateDeviceState(UpdateDeviceStateRequest $args)
    {
        $result = parent::updateDeviceState($args->toArray());
        return new UpdateDeviceStateResponse($result->toArray());
    }
}
