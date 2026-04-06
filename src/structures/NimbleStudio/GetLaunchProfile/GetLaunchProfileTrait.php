<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetLaunchProfile;

trait GetLaunchProfileTrait
{
    /**
     * @param GetLaunchProfileRequest $args
     * @return GetLaunchProfileResponse
     */
    public function getLaunchProfile(GetLaunchProfileRequest $args)
    {
        $result = parent::getLaunchProfile($args->toArray());
        return new GetLaunchProfileResponse($result->toArray());
    }
}
