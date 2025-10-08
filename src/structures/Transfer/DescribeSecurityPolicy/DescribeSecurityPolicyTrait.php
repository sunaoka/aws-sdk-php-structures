<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeSecurityPolicy;

trait DescribeSecurityPolicyTrait
{
    /**
     * @param DescribeSecurityPolicyRequest $args
     * @return DescribeSecurityPolicyResponse
     */
    public function describeSecurityPolicy(DescribeSecurityPolicyRequest $args)
    {
        $result = parent::describeSecurityPolicy($args->toArray());
        return new DescribeSecurityPolicyResponse($result->toArray());
    }
}
