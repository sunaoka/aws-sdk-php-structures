<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\UpdatePermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property 'SSO_USER'|'SSO_GROUP' $type
 */
class User extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     type: 'SSO_USER'|'SSO_GROUP'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
