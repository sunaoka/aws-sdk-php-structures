<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateInputDevice;

trait UpdateInputDeviceTrait
{
    /**
     * @param UpdateInputDeviceRequest $args
     * @return UpdateInputDeviceResponse
     */
    public function updateInputDevice(UpdateInputDeviceRequest $args)
    {
        $result = parent::updateInputDevice($args->toArray());
        return new UpdateInputDeviceResponse($result->toArray());
    }
}
