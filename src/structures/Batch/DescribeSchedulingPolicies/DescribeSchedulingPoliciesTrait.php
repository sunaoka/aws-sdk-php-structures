<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeSchedulingPolicies;

trait DescribeSchedulingPoliciesTrait
{
    /**
     * @param DescribeSchedulingPoliciesRequest $args
     * @return DescribeSchedulingPoliciesResponse
     */
    public function describeSchedulingPolicies(DescribeSchedulingPoliciesRequest $args)
    {
        $result = parent::describeSchedulingPolicies($args->toArray());
        return new DescribeSchedulingPoliciesResponse($result->toArray());
    }
}
