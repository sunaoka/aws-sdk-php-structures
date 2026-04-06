<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\ListPermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ADMIN'|'EDITOR'|'VIEWER' $role
 * @property User $user
 */
class PermissionEntry extends Shape
{
    /**
     * @param array{
     *     role: 'ADMIN'|'EDITOR'|'VIEWER',
     *     user: User
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
