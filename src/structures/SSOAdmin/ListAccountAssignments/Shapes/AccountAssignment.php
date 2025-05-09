<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListAccountAssignments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $PermissionSetArn
 * @property 'USER'|'GROUP'|null $PrincipalType
 * @property string|null $PrincipalId
 */
class AccountAssignment extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     PermissionSetArn?: string|null,
     *     PrincipalType?: 'USER'|'GROUP'|null,
     *     PrincipalId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
