<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\AssociateProfile;

trait AssociateProfileTrait
{
    /**
     * @param AssociateProfileRequest $args
     * @return AssociateProfileResponse
     */
    public function associateProfile(AssociateProfileRequest $args)
    {
        $result = parent::associateProfile($args->toArray());
        return new AssociateProfileResponse($result->toArray());
    }
}
