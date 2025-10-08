<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminUpdateDeviceStatus;

trait AdminUpdateDeviceStatusTrait
{
    /**
     * @param AdminUpdateDeviceStatusRequest $args
     * @return AdminUpdateDeviceStatusResponse
     */
    public function adminUpdateDeviceStatus(AdminUpdateDeviceStatusRequest $args)
    {
        $result = parent::adminUpdateDeviceStatus($args->toArray());
        return new AdminUpdateDeviceStatusResponse($result->toArray());
    }
}
