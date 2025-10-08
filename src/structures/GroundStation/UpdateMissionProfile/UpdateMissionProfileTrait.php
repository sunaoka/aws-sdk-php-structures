<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateMissionProfile;

trait UpdateMissionProfileTrait
{
    /**
     * @param UpdateMissionProfileRequest $args
     * @return UpdateMissionProfileResponse
     */
    public function updateMissionProfile(UpdateMissionProfileRequest $args)
    {
        $result = parent::updateMissionProfile($args->toArray());
        return new UpdateMissionProfileResponse($result->toArray());
    }
}
