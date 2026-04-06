<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateStorageProfile;

trait CreateStorageProfileTrait
{
    /**
     * @param CreateStorageProfileRequest $args
     * @return CreateStorageProfileResponse
     */
    public function createStorageProfile(CreateStorageProfileRequest $args)
    {
        $result = parent::createStorageProfile($args->toArray());
        return new CreateStorageProfileResponse($result->toArray());
    }
}
