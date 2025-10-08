<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeServiceAccessPolicies;

trait DescribeServiceAccessPoliciesTrait
{
    /**
     * @param DescribeServiceAccessPoliciesRequest $args
     * @return DescribeServiceAccessPoliciesResponse
     */
    public function describeServiceAccessPolicies(DescribeServiceAccessPoliciesRequest $args)
    {
        $result = parent::describeServiceAccessPolicies($args->toArray());
        return new DescribeServiceAccessPoliciesResponse($result->toArray());
    }
}
