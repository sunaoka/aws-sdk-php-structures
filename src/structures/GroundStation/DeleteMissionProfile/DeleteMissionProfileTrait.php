<?php

namespace Sunaoka\Aws\Structures\GroundStation\DeleteMissionProfile;

trait DeleteMissionProfileTrait
{
    /**
     * @param DeleteMissionProfileRequest $args
     * @return DeleteMissionProfileResponse
     */
    public function deleteMissionProfile(DeleteMissionProfileRequest $args)
    {
        $result = parent::deleteMissionProfile($args->toArray());
        return new DeleteMissionProfileResponse($result->toArray());
    }
}
