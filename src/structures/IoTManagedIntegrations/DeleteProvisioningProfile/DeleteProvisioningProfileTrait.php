<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\DeleteProvisioningProfile;

trait DeleteProvisioningProfileTrait
{
    /**
     * @param DeleteProvisioningProfileRequest $args
     * @return void
     */
    public function deleteProvisioningProfile(DeleteProvisioningProfileRequest $args)
    {
        parent::deleteProvisioningProfile($args->toArray());
    }
}
