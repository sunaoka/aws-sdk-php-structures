<?php

namespace Sunaoka\Aws\Structures\EKS\CreateFargateProfile;

trait CreateFargateProfileTrait
{
    /**
     * @param CreateFargateProfileRequest $args
     * @return CreateFargateProfileResponse
     */
    public function createFargateProfile(CreateFargateProfileRequest $args)
    {
        $result = parent::createFargateProfile($args->toArray());
        return new CreateFargateProfileResponse($result->toArray());
    }
}
