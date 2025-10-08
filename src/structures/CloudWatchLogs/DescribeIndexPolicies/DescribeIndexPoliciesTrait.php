<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeIndexPolicies;

trait DescribeIndexPoliciesTrait
{
    /**
     * @param DescribeIndexPoliciesRequest $args
     * @return DescribeIndexPoliciesResponse
     */
    public function describeIndexPolicies(DescribeIndexPoliciesRequest $args)
    {
        $result = parent::describeIndexPolicies($args->toArray());
        return new DescribeIndexPoliciesResponse($result->toArray());
    }
}
