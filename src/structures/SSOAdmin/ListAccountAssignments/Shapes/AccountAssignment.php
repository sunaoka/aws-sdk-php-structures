<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListAccountAssignments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $PermissionSetArn
 * @property string|null $PrincipalId
 * @property 'USER'|'GROUP'|null $PrincipalType
 */
class AccountAssignment extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     PermissionSetArn?: string|null,
     *     PrincipalId?: string|null,
     *     PrincipalType?: 'USER'|'GROUP'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
