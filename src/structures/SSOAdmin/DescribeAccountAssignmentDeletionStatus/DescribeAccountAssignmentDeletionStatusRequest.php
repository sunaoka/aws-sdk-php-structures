<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeAccountAssignmentDeletionStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountAssignmentDeletionRequestId
 * @property string $InstanceArn
 */
class DescribeAccountAssignmentDeletionStatusRequest extends Request
{
    /**
     * @param array{
     *     AccountAssignmentDeletionRequestId: string,
     *     InstanceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
