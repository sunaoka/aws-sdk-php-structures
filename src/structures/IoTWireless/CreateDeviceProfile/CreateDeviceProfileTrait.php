<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateDeviceProfile;

trait CreateDeviceProfileTrait
{
    /**
     * @param CreateDeviceProfileRequest $args
     * @return CreateDeviceProfileResponse
     */
    public function createDeviceProfile(CreateDeviceProfileRequest $args)
    {
        $result = parent::createDeviceProfile($args->toArray());
        return new CreateDeviceProfileResponse($result->toArray());
    }
}
