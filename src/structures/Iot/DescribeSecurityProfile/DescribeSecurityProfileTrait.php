<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeSecurityProfile;

trait DescribeSecurityProfileTrait
{
    /**
     * @param DescribeSecurityProfileRequest $args
     * @return DescribeSecurityProfileResponse
     */
    public function describeSecurityProfile(DescribeSecurityProfileRequest $args)
    {
        $result = parent::describeSecurityProfile($args->toArray());
        return new DescribeSecurityProfileResponse($result->toArray());
    }
}
