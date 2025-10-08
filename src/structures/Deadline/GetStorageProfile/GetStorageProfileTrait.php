<?php

namespace Sunaoka\Aws\Structures\Deadline\GetStorageProfile;

trait GetStorageProfileTrait
{
    /**
     * @param GetStorageProfileRequest $args
     * @return GetStorageProfileResponse
     */
    public function getStorageProfile(GetStorageProfileRequest $args)
    {
        $result = parent::getStorageProfile($args->toArray());
        return new GetStorageProfileResponse($result->toArray());
    }
}
