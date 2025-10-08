<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\DisableProfile;

trait DisableProfileTrait
{
    /**
     * @param DisableProfileRequest $args
     * @return DisableProfileResponse
     */
    public function disableProfile(DisableProfileRequest $args)
    {
        $result = parent::disableProfile($args->toArray());
        return new DisableProfileResponse($result->toArray());
    }
}
