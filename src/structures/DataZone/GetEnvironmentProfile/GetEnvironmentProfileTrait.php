<?php

namespace Sunaoka\Aws\Structures\DataZone\GetEnvironmentProfile;

trait GetEnvironmentProfileTrait
{
    /**
     * @param GetEnvironmentProfileRequest $args
     * @return GetEnvironmentProfileResponse
     */
    public function getEnvironmentProfile(GetEnvironmentProfileRequest $args)
    {
        $result = parent::getEnvironmentProfile($args->toArray());
        return new GetEnvironmentProfileResponse($result->toArray());
    }
}
