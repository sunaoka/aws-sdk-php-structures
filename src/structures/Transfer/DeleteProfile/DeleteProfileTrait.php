<?php

namespace Sunaoka\Aws\Structures\Transfer\DeleteProfile;

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
