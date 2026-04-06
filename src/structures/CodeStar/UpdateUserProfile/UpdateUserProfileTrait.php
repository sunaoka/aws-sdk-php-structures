<?php

namespace Sunaoka\Aws\Structures\CodeStar\UpdateUserProfile;

trait UpdateUserProfileTrait
{
    /**
     * @param UpdateUserProfileRequest $args
     * @return UpdateUserProfileResponse
     */
    public function updateUserProfile(UpdateUserProfileRequest $args)
    {
        $result = parent::updateUserProfile($args->toArray());
        return new UpdateUserProfileResponse($result->toArray());
    }
}
