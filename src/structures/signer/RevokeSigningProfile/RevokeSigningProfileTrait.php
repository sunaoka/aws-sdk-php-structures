<?php

namespace Sunaoka\Aws\Structures\signer\RevokeSigningProfile;

trait RevokeSigningProfileTrait
{
    /**
     * @param RevokeSigningProfileRequest $args
     * @return void
     */
    public function revokeSigningProfile(RevokeSigningProfileRequest $args)
    {
        parent::revokeSigningProfile($args->toArray());
    }
}
