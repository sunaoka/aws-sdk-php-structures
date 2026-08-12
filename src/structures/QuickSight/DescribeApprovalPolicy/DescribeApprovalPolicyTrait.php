<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeApprovalPolicy;

trait DescribeApprovalPolicyTrait
{
    /**
     * @param DescribeApprovalPolicyRequest $args
     * @return DescribeApprovalPolicyResponse
     */
    public function describeApprovalPolicy(DescribeApprovalPolicyRequest $args)
    {
        $result = parent::describeApprovalPolicy($args->toArray());
        return new DescribeApprovalPolicyResponse($result->toArray());
    }
}
