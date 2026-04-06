<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\CreateLaunchProfile;

trait CreateLaunchProfileTrait
{
    /**
     * @param CreateLaunchProfileRequest $args
     * @return CreateLaunchProfileResponse
     */
    public function createLaunchProfile(CreateLaunchProfileRequest $args)
    {
        $result = parent::createLaunchProfile($args->toArray());
        return new CreateLaunchProfileResponse($result->toArray());
    }
}
