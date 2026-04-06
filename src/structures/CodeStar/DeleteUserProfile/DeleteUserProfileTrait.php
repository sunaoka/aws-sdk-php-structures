<?php

namespace Sunaoka\Aws\Structures\CodeStar\DeleteUserProfile;

trait DeleteUserProfileTrait
{
    /**
     * @param DeleteUserProfileRequest $args
     * @return DeleteUserProfileResponse
     */
    public function deleteUserProfile(DeleteUserProfileRequest $args)
    {
        $result = parent::deleteUserProfile($args->toArray());
        return new DeleteUserProfileResponse($result->toArray());
    }
}
