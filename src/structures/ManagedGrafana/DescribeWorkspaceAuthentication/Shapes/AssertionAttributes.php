<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\DescribeWorkspaceAuthentication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $login
 * @property string|null $email
 * @property string|null $groups
 * @property string|null $role
 * @property string|null $org
 */
class AssertionAttributes extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     login?: string|null,
     *     email?: string|null,
     *     groups?: string|null,
     *     role?: string|null,
     *     org?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
