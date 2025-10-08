<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetProvisioningProfile;

trait GetProvisioningProfileTrait
{
    /**
     * @param GetProvisioningProfileRequest $args
     * @return GetProvisioningProfileResponse
     */
    public function getProvisioningProfile(GetProvisioningProfileRequest $args)
    {
        $result = parent::getProvisioningProfile($args->toArray());
        return new GetProvisioningProfileResponse($result->toArray());
    }
}
