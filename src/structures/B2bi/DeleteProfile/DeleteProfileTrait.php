<?php

namespace Sunaoka\Aws\Structures\B2bi\DeleteProfile;

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
