<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetAccessProfile;

trait GetAccessProfileTrait
{
    /**
     * @param GetAccessProfileRequest $args
     * @return GetAccessProfileResponse
     */
    public function getAccessProfile(GetAccessProfileRequest $args)
    {
        $result = parent::getAccessProfile($args->toArray());
        return new GetAccessProfileResponse($result->toArray());
    }
}
