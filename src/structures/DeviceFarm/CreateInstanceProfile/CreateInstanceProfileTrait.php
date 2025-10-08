<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\CreateInstanceProfile;

trait CreateInstanceProfileTrait
{
    /**
     * @param CreateInstanceProfileRequest $args
     * @return CreateInstanceProfileResponse
     */
    public function createInstanceProfile(CreateInstanceProfileRequest $args)
    {
        $result = parent::createInstanceProfile($args->toArray());
        return new CreateInstanceProfileResponse($result->toArray());
    }
}
