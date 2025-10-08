<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateStorageProfile;

trait UpdateStorageProfileTrait
{
    /**
     * @param UpdateStorageProfileRequest $args
     * @return UpdateStorageProfileResponse
     */
    public function updateStorageProfile(UpdateStorageProfileRequest $args)
    {
        $result = parent::updateStorageProfile($args->toArray());
        return new UpdateStorageProfileResponse($result->toArray());
    }
}
