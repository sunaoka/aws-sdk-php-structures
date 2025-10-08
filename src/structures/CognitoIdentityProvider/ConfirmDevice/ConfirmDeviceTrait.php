<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ConfirmDevice;

trait ConfirmDeviceTrait
{
    /**
     * @param ConfirmDeviceRequest $args
     * @return ConfirmDeviceResponse
     */
    public function confirmDevice(ConfirmDeviceRequest $args)
    {
        $result = parent::confirmDevice($args->toArray());
        return new ConfirmDeviceResponse($result->toArray());
    }
}
