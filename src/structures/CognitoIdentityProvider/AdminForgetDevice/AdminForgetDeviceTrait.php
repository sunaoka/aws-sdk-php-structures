<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminForgetDevice;

trait AdminForgetDeviceTrait
{
    /**
     * @param AdminForgetDeviceRequest $args
     * @return void
     */
    public function adminForgetDevice(AdminForgetDeviceRequest $args)
    {
        parent::adminForgetDevice($args->toArray());
    }
}
