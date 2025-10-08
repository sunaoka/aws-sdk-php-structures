<?php

namespace Sunaoka\Aws\Structures\signer\PutSigningProfile;

trait PutSigningProfileTrait
{
    /**
     * @param PutSigningProfileRequest $args
     * @return PutSigningProfileResponse
     */
    public function putSigningProfile(PutSigningProfileRequest $args)
    {
        $result = parent::putSigningProfile($args->toArray());
        return new PutSigningProfileResponse($result->toArray());
    }
}
