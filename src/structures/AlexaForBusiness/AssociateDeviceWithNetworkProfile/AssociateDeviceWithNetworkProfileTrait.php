<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\AssociateDeviceWithNetworkProfile;

trait AssociateDeviceWithNetworkProfileTrait
{
    /**
     * @param AssociateDeviceWithNetworkProfileRequest $args
     * @return AssociateDeviceWithNetworkProfileResponse
     */
    public function associateDeviceWithNetworkProfile(AssociateDeviceWithNetworkProfileRequest $args)
    {
        $result = parent::associateDeviceWithNetworkProfile($args->toArray());
        return new AssociateDeviceWithNetworkProfileResponse($result->toArray());
    }
}
