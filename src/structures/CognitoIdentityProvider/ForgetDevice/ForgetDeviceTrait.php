<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ForgetDevice;

trait ForgetDeviceTrait
{
    /**
     * @param ForgetDeviceRequest $args
     * @return void
     */
    public function forgetDevice(ForgetDeviceRequest $args)
    {
        parent::forgetDevice($args->toArray());
    }
}
