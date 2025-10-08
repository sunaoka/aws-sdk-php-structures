<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateAuthenticationProfile;

trait CreateAuthenticationProfileTrait
{
    /**
     * @param CreateAuthenticationProfileRequest $args
     * @return CreateAuthenticationProfileResponse
     */
    public function createAuthenticationProfile(CreateAuthenticationProfileRequest $args)
    {
        $result = parent::createAuthenticationProfile($args->toArray());
        return new CreateAuthenticationProfileResponse($result->toArray());
    }
}
