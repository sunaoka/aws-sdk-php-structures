<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient\DeregisterDevice;

trait DeregisterDeviceTrait
{
    /**
     * @param DeregisterDeviceRequest $args
     * @return DeregisterDeviceResponse
     */
    public function deregisterDevice(DeregisterDeviceRequest $args)
    {
        $result = parent::deregisterDevice($args->toArray());
        return new DeregisterDeviceResponse($result->toArray());
    }
}
