<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateGroupProfile;

trait UpdateGroupProfileTrait
{
    /**
     * @param UpdateGroupProfileRequest $args
     * @return UpdateGroupProfileResponse
     */
    public function updateGroupProfile(UpdateGroupProfileRequest $args)
    {
        $result = parent::updateGroupProfile($args->toArray());
        return new UpdateGroupProfileResponse($result->toArray());
    }
}
