<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateEnvironmentProfile;

trait CreateEnvironmentProfileTrait
{
    /**
     * @param CreateEnvironmentProfileRequest $args
     * @return CreateEnvironmentProfileResponse
     */
    public function createEnvironmentProfile(CreateEnvironmentProfileRequest $args)
    {
        $result = parent::createEnvironmentProfile($args->toArray());
        return new CreateEnvironmentProfileResponse($result->toArray());
    }
}
