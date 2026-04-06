<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListProvisioningProfiles;

trait ListProvisioningProfilesTrait
{
    /**
     * @param ListProvisioningProfilesRequest $args
     * @return ListProvisioningProfilesResponse
     */
    public function listProvisioningProfiles(ListProvisioningProfilesRequest $args)
    {
        $result = parent::listProvisioningProfiles($args->toArray());
        return new ListProvisioningProfilesResponse($result->toArray());
    }
}
