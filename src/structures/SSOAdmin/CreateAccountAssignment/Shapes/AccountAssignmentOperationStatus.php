<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\CreateAccountAssignment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|null $Status
 * @property string|null $RequestId
 * @property string|null $FailureReason
 * @property string|null $TargetId
 * @property 'AWS_ACCOUNT'|null $TargetType
 * @property string|null $PermissionSetArn
 * @property 'USER'|'GROUP'|null $PrincipalType
 * @property string|null $PrincipalId
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 */
class AccountAssignmentOperationStatus extends Shape
{
    /**
     * @param array{
     *     Status?: 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|null,
     *     RequestId?: string|null,
     *     FailureReason?: string|null,
     *     TargetId?: string|null,
     *     TargetType?: 'AWS_ACCOUNT'|null,
     *     PermissionSetArn?: string|null,
     *     PrincipalType?: 'USER'|'GROUP'|null,
     *     PrincipalId?: string|null,
     *     CreatedDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
