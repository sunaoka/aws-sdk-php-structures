<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\DeleteAccessProfile;

trait DeleteAccessProfileTrait
{
    /**
     * @param DeleteAccessProfileRequest $args
     * @return DeleteAccessProfileResponse
     */
    public function deleteAccessProfile(DeleteAccessProfileRequest $args)
    {
        $result = parent::deleteAccessProfile($args->toArray());
        return new DeleteAccessProfileResponse($result->toArray());
    }
}
