<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeRoutingProfile;

trait DescribeRoutingProfileTrait
{
    /**
     * @param DescribeRoutingProfileRequest $args
     * @return DescribeRoutingProfileResponse
     */
    public function describeRoutingProfile(DescribeRoutingProfileRequest $args)
    {
        $result = parent::describeRoutingProfile($args->toArray());
        return new DescribeRoutingProfileResponse($result->toArray());
    }
}
