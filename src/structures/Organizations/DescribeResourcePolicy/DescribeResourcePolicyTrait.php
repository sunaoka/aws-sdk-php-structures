<?php

namespace Sunaoka\Aws\Structures\Organizations\DescribeResourcePolicy;

trait DescribeResourcePolicyTrait
{
    /**
     * @return DescribeResourcePolicyResponse
     */
    public function describeResourcePolicy()
    {
        $result = parent::describeResourcePolicy();
        return new DescribeResourcePolicyResponse($result->toArray());
    }
}
