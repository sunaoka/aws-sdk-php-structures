<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\RegisterAVSDevice;

trait RegisterAVSDeviceTrait
{
    /**
     * @param RegisterAVSDeviceRequest $args
     * @return RegisterAVSDeviceResponse
     */
    public function registerAVSDevice(RegisterAVSDeviceRequest $args)
    {
        $result = parent::registerAVSDevice($args->toArray());
        return new RegisterAVSDeviceResponse($result->toArray());
    }
}
