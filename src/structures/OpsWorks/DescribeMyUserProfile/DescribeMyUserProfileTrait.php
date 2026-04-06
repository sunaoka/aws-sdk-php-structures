<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeMyUserProfile;

trait DescribeMyUserProfileTrait
{
    /**
     * @return DescribeMyUserProfileResponse
     */
    public function describeMyUserProfile()
    {
        $result = parent::describeMyUserProfile();
        return new DescribeMyUserProfileResponse($result->toArray());
    }
}
