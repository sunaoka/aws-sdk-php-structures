<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateProfile;

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
