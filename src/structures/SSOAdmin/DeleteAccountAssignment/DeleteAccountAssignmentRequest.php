<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DeleteAccountAssignment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 * @property string $TargetId
 * @property 'AWS_ACCOUNT' $TargetType
 * @property string $PermissionSetArn
 * @property 'USER'|'GROUP' $PrincipalType
 * @property string $PrincipalId
 */
class DeleteAccountAssignmentRequest extends Request
{
    /**
     * @param array{
     *     InstanceArn: string,
     *     TargetId: string,
     *     TargetType: 'AWS_ACCOUNT',
     *     PermissionSetArn: string,
     *     PrincipalType: 'USER'|'GROUP',
     *     PrincipalId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
