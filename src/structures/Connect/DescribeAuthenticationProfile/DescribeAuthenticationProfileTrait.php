<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeAuthenticationProfile;

trait DescribeAuthenticationProfileTrait
{
    /**
     * @param DescribeAuthenticationProfileRequest $args
     * @return DescribeAuthenticationProfileResponse
     */
    public function describeAuthenticationProfile(DescribeAuthenticationProfileRequest $args)
    {
        $result = parent::describeAuthenticationProfile($args->toArray());
        return new DescribeAuthenticationProfileResponse($result->toArray());
    }
}
