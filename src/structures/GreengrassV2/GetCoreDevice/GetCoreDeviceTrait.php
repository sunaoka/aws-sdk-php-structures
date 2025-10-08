<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\GetCoreDevice;

trait GetCoreDeviceTrait
{
    /**
     * @param GetCoreDeviceRequest $args
     * @return GetCoreDeviceResponse
     */
    public function getCoreDevice(GetCoreDeviceRequest $args)
    {
        $result = parent::getCoreDevice($args->toArray());
        return new GetCoreDeviceResponse($result->toArray());
    }
}
