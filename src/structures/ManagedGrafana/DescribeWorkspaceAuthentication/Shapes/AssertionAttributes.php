<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\DescribeWorkspaceAuthentication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $email
 * @property string|null $groups
 * @property string|null $login
 * @property string|null $name
 * @property string|null $org
 * @property string|null $role
 */
class AssertionAttributes extends Shape
{
    /**
     * @param array{
     *     email?: string|null,
     *     groups?: string|null,
     *     login?: string|null,
     *     name?: string|null,
     *     org?: string|null,
     *     role?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
