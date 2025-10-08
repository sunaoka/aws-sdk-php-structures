<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeIAMPolicyAssignment;

trait DescribeIAMPolicyAssignmentTrait
{
    /**
     * @param DescribeIAMPolicyAssignmentRequest $args
     * @return DescribeIAMPolicyAssignmentResponse
     */
    public function describeIAMPolicyAssignment(DescribeIAMPolicyAssignmentRequest $args)
    {
        $result = parent::describeIAMPolicyAssignment($args->toArray());
        return new DescribeIAMPolicyAssignmentResponse($result->toArray());
    }
}
