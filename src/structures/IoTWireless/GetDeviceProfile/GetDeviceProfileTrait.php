<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetDeviceProfile;

trait GetDeviceProfileTrait
{
    /**
     * @param GetDeviceProfileRequest $args
     * @return GetDeviceProfileResponse
     */
    public function getDeviceProfile(GetDeviceProfileRequest $args)
    {
        $result = parent::getDeviceProfile($args->toArray());
        return new GetDeviceProfileResponse($result->toArray());
    }
}
