<?php

namespace Sunaoka\Aws\Structures\Deadline\DeleteStorageProfile;

trait DeleteStorageProfileTrait
{
    /**
     * @param DeleteStorageProfileRequest $args
     * @return DeleteStorageProfileResponse
     */
    public function deleteStorageProfile(DeleteStorageProfileRequest $args)
    {
        $result = parent::deleteStorageProfile($args->toArray());
        return new DeleteStorageProfileResponse($result->toArray());
    }
}
