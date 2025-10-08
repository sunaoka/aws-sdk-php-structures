<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeCAEnrollmentPolicy;

trait DescribeCAEnrollmentPolicyTrait
{
    /**
     * @param DescribeCAEnrollmentPolicyRequest $args
     * @return DescribeCAEnrollmentPolicyResponse
     */
    public function describeCAEnrollmentPolicy(DescribeCAEnrollmentPolicyRequest $args)
    {
        $result = parent::describeCAEnrollmentPolicy($args->toArray());
        return new DescribeCAEnrollmentPolicyResponse($result->toArray());
    }
}
