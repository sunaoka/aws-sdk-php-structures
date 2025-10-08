<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\UpdateInstanceProfile;

trait UpdateInstanceProfileTrait
{
    /**
     * @param UpdateInstanceProfileRequest $args
     * @return UpdateInstanceProfileResponse
     */
    public function updateInstanceProfile(UpdateInstanceProfileRequest $args)
    {
        $result = parent::updateInstanceProfile($args->toArray());
        return new UpdateInstanceProfileResponse($result->toArray());
    }
}
