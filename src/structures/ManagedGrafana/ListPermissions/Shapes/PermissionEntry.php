<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\ListPermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property User $user
 * @property 'ADMIN'|'EDITOR'|'VIEWER' $role
 */
class PermissionEntry extends Shape
{
    /**
     * @param array{
     *     user: User,
     *     role: 'ADMIN'|'EDITOR'|'VIEWER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
