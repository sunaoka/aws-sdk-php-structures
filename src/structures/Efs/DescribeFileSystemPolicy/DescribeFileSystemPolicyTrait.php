<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeFileSystemPolicy;

trait DescribeFileSystemPolicyTrait
{
    /**
     * @param DescribeFileSystemPolicyRequest $args
     * @return DescribeFileSystemPolicyResponse
     */
    public function describeFileSystemPolicy(DescribeFileSystemPolicyRequest $args)
    {
        $result = parent::describeFileSystemPolicy($args->toArray());
        return new DescribeFileSystemPolicyResponse($result->toArray());
    }
}
