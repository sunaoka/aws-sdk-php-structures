<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteSecurityProfile;

trait DeleteSecurityProfileTrait
{
    /**
     * @param DeleteSecurityProfileRequest $args
     * @return DeleteSecurityProfileResponse
     */
    public function deleteSecurityProfile(DeleteSecurityProfileRequest $args)
    {
        $result = parent::deleteSecurityProfile($args->toArray());
        return new DeleteSecurityProfileResponse($result->toArray());
    }
}
