<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeAccountAssignmentCreationStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property string $FailureReason
 * @property string $PermissionSetArn
 * @property string $PrincipalId
 * @property 'USER'|'GROUP' $PrincipalType
 * @property string $RequestId
 * @property 'IN_PROGRESS'|'FAILED'|'SUCCEEDED' $Status
 * @property string $TargetId
 * @property 'AWS_ACCOUNT' $TargetType
 */
class AccountAssignmentOperationStatus extends Shape
{
    /**
     * @param array{
     *     CreatedDate?: \Aws\Api\DateTimeResult,
     *     FailureReason?: string,
     *     PermissionSetArn?: string,
     *     PrincipalId?: string,
     *     PrincipalType?: 'USER'|'GROUP',
     *     RequestId?: string,
     *     Status?: 'IN_PROGRESS'|'FAILED'|'SUCCEEDED',
     *     TargetId?: string,
     *     TargetType?: 'AWS_ACCOUNT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
