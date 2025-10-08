<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\DeleteProfile;

trait DeleteProfileTrait
{
    /**
     * @param DeleteProfileRequest $args
     * @return DeleteProfileResponse
     */
    public function deleteProfile(DeleteProfileRequest $args)
    {
        $result = parent::deleteProfile($args->toArray());
        return new DeleteProfileResponse($result->toArray());
    }
}
