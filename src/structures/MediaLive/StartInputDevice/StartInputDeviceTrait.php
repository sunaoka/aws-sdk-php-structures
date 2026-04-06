<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartInputDevice;

trait StartInputDeviceTrait
{
    /**
     * @param StartInputDeviceRequest $args
     * @return StartInputDeviceResponse
     */
    public function startInputDevice(StartInputDeviceRequest $args)
    {
        $result = parent::startInputDevice($args->toArray());
        return new StartInputDeviceResponse($result->toArray());
    }
}
