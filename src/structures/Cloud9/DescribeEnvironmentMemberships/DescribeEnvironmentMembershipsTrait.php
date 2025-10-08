<?php

namespace Sunaoka\Aws\Structures\Cloud9\DescribeEnvironmentMemberships;

trait DescribeEnvironmentMembershipsTrait
{
    /**
     * @param DescribeEnvironmentMembershipsRequest $args
     * @return DescribeEnvironmentMembershipsResponse
     */
    public function describeEnvironmentMemberships(DescribeEnvironmentMembershipsRequest $args)
    {
        $result = parent::describeEnvironmentMemberships($args->toArray());
        return new DescribeEnvironmentMembershipsResponse($result->toArray());
    }
}
