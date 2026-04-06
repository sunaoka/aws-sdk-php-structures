<?php

namespace Sunaoka\Aws\Structures\OpsWorks\CreateUserProfile;

trait CreateUserProfileTrait
{
    /**
     * @param CreateUserProfileRequest $args
     * @return CreateUserProfileResponse
     */
    public function createUserProfile(CreateUserProfileRequest $args)
    {
        $result = parent::createUserProfile($args->toArray());
        return new CreateUserProfileResponse($result->toArray());
    }
}
