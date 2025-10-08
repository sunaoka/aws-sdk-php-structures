<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeProfile;

trait DescribeProfileTrait
{
    /**
     * @param DescribeProfileRequest $args
     * @return DescribeProfileResponse
     */
    public function describeProfile(DescribeProfileRequest $args)
    {
        $result = parent::describeProfile($args->toArray());
        return new DescribeProfileResponse($result->toArray());
    }
}
