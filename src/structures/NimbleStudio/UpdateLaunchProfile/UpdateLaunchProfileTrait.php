<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\UpdateLaunchProfile;

trait UpdateLaunchProfileTrait
{
    /**
     * @param UpdateLaunchProfileRequest $args
     * @return UpdateLaunchProfileResponse
     */
    public function updateLaunchProfile(UpdateLaunchProfileRequest $args)
    {
        $result = parent::updateLaunchProfile($args->toArray());
        return new UpdateLaunchProfileResponse($result->toArray());
    }
}
