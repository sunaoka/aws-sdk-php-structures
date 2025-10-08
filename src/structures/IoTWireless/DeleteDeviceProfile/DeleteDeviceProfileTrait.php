<?php

namespace Sunaoka\Aws\Structures\IoTWireless\DeleteDeviceProfile;

trait DeleteDeviceProfileTrait
{
    /**
     * @param DeleteDeviceProfileRequest $args
     * @return DeleteDeviceProfileResponse
     */
    public function deleteDeviceProfile(DeleteDeviceProfileRequest $args)
    {
        $result = parent::deleteDeviceProfile($args->toArray());
        return new DeleteDeviceProfileResponse($result->toArray());
    }
}
