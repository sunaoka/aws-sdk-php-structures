<?php

namespace Sunaoka\Aws\Structures\Macie2\GetResourceProfile;

trait GetResourceProfileTrait
{
    /**
     * @param GetResourceProfileRequest $args
     * @return GetResourceProfileResponse
     */
    public function getResourceProfile(GetResourceProfileRequest $args)
    {
        $result = parent::getResourceProfile($args->toArray());
        return new GetResourceProfileResponse($result->toArray());
    }
}
