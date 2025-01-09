<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListAccountAssignmentsForPrincipal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $PermissionSetArn
 * @property string $PrincipalId
 * @property 'USER'|'GROUP' $PrincipalType
 */
class AccountAssignmentForPrincipal extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     PermissionSetArn?: string,
     *     PrincipalId?: string,
     *     PrincipalType?: 'USER'|'GROUP'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
