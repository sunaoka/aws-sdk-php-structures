<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\UpdateNetworkProfile;

trait UpdateNetworkProfileTrait
{
    /**
     * @param UpdateNetworkProfileRequest $args
     * @return UpdateNetworkProfileResponse
     */
    public function updateNetworkProfile(UpdateNetworkProfileRequest $args)
    {
        $result = parent::updateNetworkProfile($args->toArray());
        return new UpdateNetworkProfileResponse($result->toArray());
    }
}
