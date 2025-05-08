<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeAccountAssignmentDeletionStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 * @property string $AccountAssignmentDeletionRequestId
 */
class DescribeAccountAssignmentDeletionStatusRequest extends Request
{
    /**
     * @param array{
     *     InstanceArn: string,
     *     AccountAssignmentDeletionRequestId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
