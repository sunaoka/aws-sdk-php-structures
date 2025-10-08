<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminListDevices;

trait AdminListDevicesTrait
{
    /**
     * @param AdminListDevicesRequest $args
     * @return AdminListDevicesResponse
     */
    public function adminListDevices(AdminListDevicesRequest $args)
    {
        $result = parent::adminListDevices($args->toArray());
        return new AdminListDevicesResponse($result->toArray());
    }
}
