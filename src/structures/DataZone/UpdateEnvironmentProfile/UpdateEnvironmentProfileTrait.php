<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateEnvironmentProfile;

trait UpdateEnvironmentProfileTrait
{
    /**
     * @param UpdateEnvironmentProfileRequest $args
     * @return UpdateEnvironmentProfileResponse
     */
    public function updateEnvironmentProfile(UpdateEnvironmentProfileRequest $args)
    {
        $result = parent::updateEnvironmentProfile($args->toArray());
        return new UpdateEnvironmentProfileResponse($result->toArray());
    }
}
