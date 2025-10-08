<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateUserRoutingProfile;

trait UpdateUserRoutingProfileTrait
{
    /**
     * @param UpdateUserRoutingProfileRequest $args
     * @return void
     */
    public function updateUserRoutingProfile(UpdateUserRoutingProfileRequest $args)
    {
        parent::updateUserRoutingProfile($args->toArray());
    }
}
