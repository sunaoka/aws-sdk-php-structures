<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\CreateAccountAssignment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 * @property string $PermissionSetArn
 * @property string $PrincipalId
 * @property 'USER'|'GROUP' $PrincipalType
 * @property string $TargetId
 * @property 'AWS_ACCOUNT' $TargetType
 */
class CreateAccountAssignmentRequest extends Request
{
    /**
     * @param array{
     *     InstanceArn: string,
     *     PermissionSetArn: string,
     *     PrincipalId: string,
     *     PrincipalType: 'USER'|'GROUP',
     *     TargetId: string,
     *     TargetType: 'AWS_ACCOUNT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
