<?php

namespace Sunaoka\Aws\Structures\DataZone\GetUserProfile;

trait GetUserProfileTrait
{
    /**
     * @param GetUserProfileRequest $args
     * @return GetUserProfileResponse
     */
    public function getUserProfile(GetUserProfileRequest $args)
    {
        $result = parent::getUserProfile($args->toArray());
        return new GetUserProfileResponse($result->toArray());
    }
}
