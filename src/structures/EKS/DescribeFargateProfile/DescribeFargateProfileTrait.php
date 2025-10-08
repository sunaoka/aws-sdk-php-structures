<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeFargateProfile;

trait DescribeFargateProfileTrait
{
    /**
     * @param DescribeFargateProfileRequest $args
     * @return DescribeFargateProfileResponse
     */
    public function describeFargateProfile(DescribeFargateProfileRequest $args)
    {
        $result = parent::describeFargateProfile($args->toArray());
        return new DescribeFargateProfileResponse($result->toArray());
    }
}
