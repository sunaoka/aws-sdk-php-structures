<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateSecurityProfile;

trait UpdateSecurityProfileTrait
{
    /**
     * @param UpdateSecurityProfileRequest $args
     * @return UpdateSecurityProfileResponse
     */
    public function updateSecurityProfile(UpdateSecurityProfileRequest $args)
    {
        $result = parent::updateSecurityProfile($args->toArray());
        return new UpdateSecurityProfileResponse($result->toArray());
    }
}
