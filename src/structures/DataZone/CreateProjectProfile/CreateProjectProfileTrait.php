<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateProjectProfile;

trait CreateProjectProfileTrait
{
    /**
     * @param CreateProjectProfileRequest $args
     * @return CreateProjectProfileResponse
     */
    public function createProjectProfile(CreateProjectProfileRequest $args)
    {
        $result = parent::createProjectProfile($args->toArray());
        return new CreateProjectProfileResponse($result->toArray());
    }
}
