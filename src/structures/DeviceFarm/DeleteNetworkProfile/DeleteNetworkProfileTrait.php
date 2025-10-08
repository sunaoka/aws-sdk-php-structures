<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\DeleteNetworkProfile;

trait DeleteNetworkProfileTrait
{
    /**
     * @param DeleteNetworkProfileRequest $args
     * @return DeleteNetworkProfileResponse
     */
    public function deleteNetworkProfile(DeleteNetworkProfileRequest $args)
    {
        $result = parent::deleteNetworkProfile($args->toArray());
        return new DeleteNetworkProfileResponse($result->toArray());
    }
}
