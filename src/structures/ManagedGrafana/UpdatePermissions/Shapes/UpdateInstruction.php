<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\UpdatePermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ADD'|'REVOKE' $action
 * @property 'ADMIN'|'EDITOR'|'VIEWER' $role
 * @property list<User> $users
 */
class UpdateInstruction extends Shape
{
    /**
     * @param array{
     *     action: 'ADD'|'REVOKE',
     *     role: 'ADMIN'|'EDITOR'|'VIEWER',
     *     users: list<User>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
