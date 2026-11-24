<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeSnapmirrorPolicies;

trait DescribeSnapmirrorPoliciesTrait
{
    /**
     * @param DescribeSnapmirrorPoliciesRequest $args
     * @return DescribeSnapmirrorPoliciesResponse
     */
    public function describeSnapmirrorPolicies(DescribeSnapmirrorPoliciesRequest $args)
    {
        $result = parent::describeSnapmirrorPolicies($args->toArray());
        return new DescribeSnapmirrorPoliciesResponse($result->toArray());
    }
}
