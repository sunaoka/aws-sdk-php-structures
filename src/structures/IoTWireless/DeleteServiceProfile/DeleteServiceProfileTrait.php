<?php

namespace Sunaoka\Aws\Structures\IoTWireless\DeleteServiceProfile;

trait DeleteServiceProfileTrait
{
    /**
     * @param DeleteServiceProfileRequest $args
     * @return DeleteServiceProfileResponse
     */
    public function deleteServiceProfile(DeleteServiceProfileRequest $args)
    {
        $result = parent::deleteServiceProfile($args->toArray());
        return new DeleteServiceProfileResponse($result->toArray());
    }
}
