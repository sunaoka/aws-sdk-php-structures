<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeIAMPolicyAssignment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $AssignmentName
 * @property string $Namespace
 */
class DescribeIAMPolicyAssignmentRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     AssignmentName: string,
     *     Namespace: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
