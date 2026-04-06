<?php

namespace Sunaoka\Aws\Structures\B2bi\UpdateProfile;

trait UpdateProfileTrait
{
    /**
     * @param UpdateProfileRequest $args
     * @return UpdateProfileResponse
     */
    public function updateProfile(UpdateProfileRequest $args)
    {
        $result = parent::updateProfile($args->toArray());
        return new UpdateProfileResponse($result->toArray());
    }
}
