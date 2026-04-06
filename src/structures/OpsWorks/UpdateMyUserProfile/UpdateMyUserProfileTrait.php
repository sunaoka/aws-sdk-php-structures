<?php

namespace Sunaoka\Aws\Structures\OpsWorks\UpdateMyUserProfile;

trait UpdateMyUserProfileTrait
{
    /**
     * @param UpdateMyUserProfileRequest $args
     * @return void
     */
    public function updateMyUserProfile(UpdateMyUserProfileRequest $args)
    {
        parent::updateMyUserProfile($args->toArray());
    }
}
