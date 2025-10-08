<?php

namespace Sunaoka\Aws\Structures\Panorama\DeleteDevice;

trait DeleteDeviceTrait
{
    /**
     * @param DeleteDeviceRequest $args
     * @return DeleteDeviceResponse
     */
    public function deleteDevice(DeleteDeviceRequest $args)
    {
        $result = parent::deleteDevice($args->toArray());
        return new DeleteDeviceResponse($result->toArray());
    }
}
