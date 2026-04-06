<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\CreateAccountAssignment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property string|null $FailureReason
 * @property string|null $PermissionSetArn
 * @property string|null $PrincipalId
 * @property 'USER'|'GROUP'|null $PrincipalType
 * @property string|null $RequestId
 * @property 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|null $Status
 * @property string|null $TargetId
 * @property 'AWS_ACCOUNT'|null $TargetType
 */
class AccountAssignmentOperationStatus extends Shape
{
    /**
     * @param array{
     *     CreatedDate?: \Aws\Api\DateTimeResult|null,
     *     FailureReason?: string|null,
     *     PermissionSetArn?: string|null,
     *     PrincipalId?: string|null,
     *     PrincipalType?: 'USER'|'GROUP'|null,
     *     RequestId?: string|null,
     *     Status?: 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|null,
     *     TargetId?: string|null,
     *     TargetType?: 'AWS_ACCOUNT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
