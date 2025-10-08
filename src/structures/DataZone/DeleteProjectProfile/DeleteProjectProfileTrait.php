<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteProjectProfile;

trait DeleteProjectProfileTrait
{
    /**
     * @param DeleteProjectProfileRequest $args
     * @return DeleteProjectProfileResponse
     */
    public function deleteProjectProfile(DeleteProjectProfileRequest $args)
    {
        $result = parent::deleteProjectProfile($args->toArray());
        return new DeleteProjectProfileResponse($result->toArray());
    }
}
