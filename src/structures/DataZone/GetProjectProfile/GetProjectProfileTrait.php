<?php

namespace Sunaoka\Aws\Structures\DataZone\GetProjectProfile;

trait GetProjectProfileTrait
{
    /**
     * @param GetProjectProfileRequest $args
     * @return GetProjectProfileResponse
     */
    public function getProjectProfile(GetProjectProfileRequest $args)
    {
        $result = parent::getProjectProfile($args->toArray());
        return new GetProjectProfileResponse($result->toArray());
    }
}
