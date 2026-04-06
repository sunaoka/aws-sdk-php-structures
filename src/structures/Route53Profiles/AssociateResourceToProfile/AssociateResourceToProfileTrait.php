<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\AssociateResourceToProfile;

trait AssociateResourceToProfileTrait
{
    /**
     * @param AssociateResourceToProfileRequest $args
     * @return AssociateResourceToProfileResponse
     */
    public function associateResourceToProfile(AssociateResourceToProfileRequest $args)
    {
        $result = parent::associateResourceToProfile($args->toArray());
        return new AssociateResourceToProfileResponse($result->toArray());
    }
}
