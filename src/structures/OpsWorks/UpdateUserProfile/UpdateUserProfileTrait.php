<?php

namespace Sunaoka\Aws\Structures\OpsWorks\UpdateUserProfile;

trait UpdateUserProfileTrait
{
    /**
     * @param UpdateUserProfileRequest $args
     * @return void
     */
    public function updateUserProfile(UpdateUserProfileRequest $args)
    {
        parent::updateUserProfile($args->toArray());
    }
}
