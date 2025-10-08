<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeBackupPolicy;

trait DescribeBackupPolicyTrait
{
    /**
     * @param DescribeBackupPolicyRequest $args
     * @return DescribeBackupPolicyResponse
     */
    public function describeBackupPolicy(DescribeBackupPolicyRequest $args)
    {
        $result = parent::describeBackupPolicy($args->toArray());
        return new DescribeBackupPolicyResponse($result->toArray());
    }
}
