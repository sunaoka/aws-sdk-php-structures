<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\GetProfile;

trait GetProfileTrait
{
    /**
     * @param GetProfileRequest $args
     * @return GetProfileResponse
     */
    public function getProfile(GetProfileRequest $args)
    {
        $result = parent::getProfile($args->toArray());
        return new GetProfileResponse($result->toArray());
    }
}
