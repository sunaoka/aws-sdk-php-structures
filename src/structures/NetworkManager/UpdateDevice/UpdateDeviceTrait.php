<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateDevice;

trait UpdateDeviceTrait
{
    /**
     * @param UpdateDeviceRequest $args
     * @return UpdateDeviceResponse
     */
    public function updateDevice(UpdateDeviceRequest $args)
    {
        $result = parent::updateDevice($args->toArray());
        return new UpdateDeviceResponse($result->toArray());
    }
}
