<?php

namespace Sunaoka\Aws\Structures\CodeStar\DescribeUserProfile;

trait DescribeUserProfileTrait
{
    /**
     * @param DescribeUserProfileRequest $args
     * @return DescribeUserProfileResponse
     */
    public function describeUserProfile(DescribeUserProfileRequest $args)
    {
        $result = parent::describeUserProfile($args->toArray());
        return new DescribeUserProfileResponse($result->toArray());
    }
}
