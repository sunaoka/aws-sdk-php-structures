<?php

namespace Sunaoka\Aws\Structures\MediaLive\RebootInputDevice;

trait RebootInputDeviceTrait
{
    /**
     * @param RebootInputDeviceRequest $args
     * @return RebootInputDeviceResponse
     */
    public function rebootInputDevice(RebootInputDeviceRequest $args)
    {
        $result = parent::rebootInputDevice($args->toArray());
        return new RebootInputDeviceResponse($result->toArray());
    }
}
