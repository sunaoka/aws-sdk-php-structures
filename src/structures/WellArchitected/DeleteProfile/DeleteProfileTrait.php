<?php

namespace Sunaoka\Aws\Structures\WellArchitected\DeleteProfile;

trait DeleteProfileTrait
{
    /**
     * @param DeleteProfileRequest $args
     * @return void
     */
    public function deleteProfile(DeleteProfileRequest $args)
    {
        parent::deleteProfile($args->toArray());
    }
}
