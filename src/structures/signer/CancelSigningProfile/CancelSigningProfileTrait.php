<?php

namespace Sunaoka\Aws\Structures\signer\CancelSigningProfile;

trait CancelSigningProfileTrait
{
    /**
     * @param CancelSigningProfileRequest $args
     * @return void
     */
    public function cancelSigningProfile(CancelSigningProfileRequest $args)
    {
        parent::cancelSigningProfile($args->toArray());
    }
}
