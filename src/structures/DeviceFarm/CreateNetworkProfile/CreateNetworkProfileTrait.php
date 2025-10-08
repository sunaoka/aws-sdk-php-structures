<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\CreateNetworkProfile;

trait CreateNetworkProfileTrait
{
    /**
     * @param CreateNetworkProfileRequest $args
     * @return CreateNetworkProfileResponse
     */
    public function createNetworkProfile(CreateNetworkProfileRequest $args)
    {
        $result = parent::createNetworkProfile($args->toArray());
        return new CreateNetworkProfileResponse($result->toArray());
    }
}
