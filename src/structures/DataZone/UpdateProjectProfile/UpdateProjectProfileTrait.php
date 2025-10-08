<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateProjectProfile;

trait UpdateProjectProfileTrait
{
    /**
     * @param UpdateProjectProfileRequest $args
     * @return UpdateProjectProfileResponse
     */
    public function updateProjectProfile(UpdateProjectProfileRequest $args)
    {
        $result = parent::updateProjectProfile($args->toArray());
        return new UpdateProjectProfileResponse($result->toArray());
    }
}
