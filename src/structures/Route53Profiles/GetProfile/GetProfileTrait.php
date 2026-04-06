<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\GetProfile;

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
