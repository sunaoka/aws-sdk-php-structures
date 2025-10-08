<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteUserProfile;

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
