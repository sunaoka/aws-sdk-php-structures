<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateProvisioningProfile;

trait CreateProvisioningProfileTrait
{
    /**
     * @param CreateProvisioningProfileRequest $args
     * @return CreateProvisioningProfileResponse
     */
    public function createProvisioningProfile(CreateProvisioningProfileRequest $args)
    {
        $result = parent::createProvisioningProfile($args->toArray());
        return new CreateProvisioningProfileResponse($result->toArray());
    }
}
