<?php

namespace Sunaoka\Aws\Structures\signer\GetSigningProfile;

trait GetSigningProfileTrait
{
    /**
     * @param GetSigningProfileRequest $args
     * @return GetSigningProfileResponse
     */
    public function getSigningProfile(GetSigningProfileRequest $args)
    {
        $result = parent::getSigningProfile($args->toArray());
        return new GetSigningProfileResponse($result->toArray());
    }
}
