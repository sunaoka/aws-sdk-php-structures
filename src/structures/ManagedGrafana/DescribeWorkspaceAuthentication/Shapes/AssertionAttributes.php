<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\DescribeWorkspaceAuthentication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $email
 * @property string $groups
 * @property string $login
 * @property string $name
 * @property string $org
 * @property string $role
 */
class AssertionAttributes extends Shape
{
    /**
     * @param array{
     *     email?: string,
     *     groups?: string,
     *     login?: string,
     *     name?: string,
     *     org?: string,
     *     role?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
