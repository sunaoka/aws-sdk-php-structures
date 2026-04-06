<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DeleteUserProfile;

trait DeleteUserProfileTrait
{
    /**
     * @param DeleteUserProfileRequest $args
     * @return void
     */
    public function deleteUserProfile(DeleteUserProfileRequest $args)
    {
        parent::deleteUserProfile($args->toArray());
    }
}
