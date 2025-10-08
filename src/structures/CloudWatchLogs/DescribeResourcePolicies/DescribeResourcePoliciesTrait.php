<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeResourcePolicies;

trait DescribeResourcePoliciesTrait
{
    /**
     * @param DescribeResourcePoliciesRequest $args
     * @return DescribeResourcePoliciesResponse
     */
    public function describeResourcePolicies(DescribeResourcePoliciesRequest $args)
    {
        $result = parent::describeResourcePolicies($args->toArray());
        return new DescribeResourcePoliciesResponse($result->toArray());
    }
}
