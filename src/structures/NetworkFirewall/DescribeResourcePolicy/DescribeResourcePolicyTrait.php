<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeResourcePolicy;

trait DescribeResourcePolicyTrait
{
    /**
     * @param DescribeResourcePolicyRequest $args
     * @return DescribeResourcePolicyResponse
     */
    public function describeResourcePolicy(DescribeResourcePolicyRequest $args)
    {
        $result = parent::describeResourcePolicy($args->toArray());
        return new DescribeResourcePolicyResponse($result->toArray());
    }
}
