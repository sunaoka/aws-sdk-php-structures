<?php

namespace Sunaoka\Aws\Structures\Iot\DetachSecurityProfile;

trait DetachSecurityProfileTrait
{
    /**
     * @param DetachSecurityProfileRequest $args
     * @return DetachSecurityProfileResponse
     */
    public function detachSecurityProfile(DetachSecurityProfileRequest $args)
    {
        $result = parent::detachSecurityProfile($args->toArray());
        return new DetachSecurityProfileResponse($result->toArray());
    }
}
