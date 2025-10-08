<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetMissionProfile;

trait GetMissionProfileTrait
{
    /**
     * @param GetMissionProfileRequest $args
     * @return GetMissionProfileResponse
     */
    public function getMissionProfile(GetMissionProfileRequest $args)
    {
        $result = parent::getMissionProfile($args->toArray());
        return new GetMissionProfileResponse($result->toArray());
    }
}
