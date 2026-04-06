<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\DeleteLaunchProfile;

trait DeleteLaunchProfileTrait
{
    /**
     * @param DeleteLaunchProfileRequest $args
     * @return DeleteLaunchProfileResponse
     */
    public function deleteLaunchProfile(DeleteLaunchProfileRequest $args)
    {
        $result = parent::deleteLaunchProfile($args->toArray());
        return new DeleteLaunchProfileResponse($result->toArray());
    }
}
