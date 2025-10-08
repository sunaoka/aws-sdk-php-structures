<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteRoutingProfile;

trait DeleteRoutingProfileTrait
{
    /**
     * @param DeleteRoutingProfileRequest $args
     * @return void
     */
    public function deleteRoutingProfile(DeleteRoutingProfileRequest $args)
    {
        parent::deleteRoutingProfile($args->toArray());
    }
}
