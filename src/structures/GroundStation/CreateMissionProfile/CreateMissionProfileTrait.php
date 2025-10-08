<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateMissionProfile;

trait CreateMissionProfileTrait
{
    /**
     * @param CreateMissionProfileRequest $args
     * @return CreateMissionProfileResponse
     */
    public function createMissionProfile(CreateMissionProfileRequest $args)
    {
        $result = parent::createMissionProfile($args->toArray());
        return new CreateMissionProfileResponse($result->toArray());
    }
}
