<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DeleteDevice;

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
