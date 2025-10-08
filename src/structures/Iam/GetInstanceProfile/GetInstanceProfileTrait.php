<?php

namespace Sunaoka\Aws\Structures\Iam\GetInstanceProfile;

trait GetInstanceProfileTrait
{
    /**
     * @param GetInstanceProfileRequest $args
     * @return GetInstanceProfileResponse
     */
    public function getInstanceProfile(GetInstanceProfileRequest $args)
    {
        $result = parent::getInstanceProfile($args->toArray());
        return new GetInstanceProfileResponse($result->toArray());
    }
}
