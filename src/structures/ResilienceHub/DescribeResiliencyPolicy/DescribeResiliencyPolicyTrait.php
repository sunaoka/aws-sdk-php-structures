<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeResiliencyPolicy;

trait DescribeResiliencyPolicyTrait
{
    /**
     * @param DescribeResiliencyPolicyRequest $args
     * @return DescribeResiliencyPolicyResponse
     */
    public function describeResiliencyPolicy(DescribeResiliencyPolicyRequest $args)
    {
        $result = parent::describeResiliencyPolicy($args->toArray());
        return new DescribeResiliencyPolicyResponse($result->toArray());
    }
}
