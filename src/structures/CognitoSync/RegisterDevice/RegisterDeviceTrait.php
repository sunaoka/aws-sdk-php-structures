<?php

namespace Sunaoka\Aws\Structures\CognitoSync\RegisterDevice;

trait RegisterDeviceTrait
{
    /**
     * @param RegisterDeviceRequest $args
     * @return RegisterDeviceResponse
     */
    public function registerDevice(RegisterDeviceRequest $args)
    {
        $result = parent::registerDevice($args->toArray());
        return new RegisterDeviceResponse($result->toArray());
    }
}
