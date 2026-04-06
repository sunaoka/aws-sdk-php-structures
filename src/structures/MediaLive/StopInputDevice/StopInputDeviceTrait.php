<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopInputDevice;

trait StopInputDeviceTrait
{
    /**
     * @param StopInputDeviceRequest $args
     * @return StopInputDeviceResponse
     */
    public function stopInputDevice(StopInputDeviceRequest $args)
    {
        $result = parent::stopInputDevice($args->toArray());
        return new StopInputDeviceResponse($result->toArray());
    }
}
