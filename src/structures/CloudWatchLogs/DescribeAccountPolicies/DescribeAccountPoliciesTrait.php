<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeAccountPolicies;

trait DescribeAccountPoliciesTrait
{
    /**
     * @param DescribeAccountPoliciesRequest $args
     * @return DescribeAccountPoliciesResponse
     */
    public function describeAccountPolicies(DescribeAccountPoliciesRequest $args)
    {
        $result = parent::describeAccountPolicies($args->toArray());
        return new DescribeAccountPoliciesResponse($result->toArray());
    }
}
