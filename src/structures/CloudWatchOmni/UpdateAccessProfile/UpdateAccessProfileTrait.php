<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\UpdateAccessProfile;

trait UpdateAccessProfileTrait
{
    /**
     * @param UpdateAccessProfileRequest $args
     * @return UpdateAccessProfileResponse
     */
    public function updateAccessProfile(UpdateAccessProfileRequest $args)
    {
        $result = parent::updateAccessProfile($args->toArray());
        return new UpdateAccessProfileResponse($result->toArray());
    }
}
