<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient\GetDevice;

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
