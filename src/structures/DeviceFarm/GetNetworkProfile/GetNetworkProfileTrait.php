<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetNetworkProfile;

trait GetNetworkProfileTrait
{
    /**
     * @param GetNetworkProfileRequest $args
     * @return GetNetworkProfileResponse
     */
    public function getNetworkProfile(GetNetworkProfileRequest $args)
    {
        $result = parent::getNetworkProfile($args->toArray());
        return new GetNetworkProfileResponse($result->toArray());
    }
}
