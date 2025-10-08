<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminGetDevice;

trait AdminGetDeviceTrait
{
    /**
     * @param AdminGetDeviceRequest $args
     * @return AdminGetDeviceResponse
     */
    public function adminGetDevice(AdminGetDeviceRequest $args)
    {
        $result = parent::adminGetDevice($args->toArray());
        return new AdminGetDeviceResponse($result->toArray());
    }
}
