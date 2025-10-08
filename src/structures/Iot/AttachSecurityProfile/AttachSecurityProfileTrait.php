<?php

namespace Sunaoka\Aws\Structures\Iot\AttachSecurityProfile;

trait AttachSecurityProfileTrait
{
    /**
     * @param AttachSecurityProfileRequest $args
     * @return AttachSecurityProfileResponse
     */
    public function attachSecurityProfile(AttachSecurityProfileRequest $args)
    {
        $result = parent::attachSecurityProfile($args->toArray());
        return new AttachSecurityProfileResponse($result->toArray());
    }
}
