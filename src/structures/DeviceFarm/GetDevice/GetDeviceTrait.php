<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetDevice;

trait GetDeviceTrait
{
    /**
     * @param GetDeviceRequest $args
     * @return GetDeviceResponse
     */
    public function getDevice(GetDeviceRequest $args)
    {
        $result = parent::getDevice($args->toArray());
        return new GetDeviceResponse($result->toArray());
    }
}
