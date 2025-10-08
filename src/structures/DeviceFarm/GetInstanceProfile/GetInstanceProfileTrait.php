<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetInstanceProfile;

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
