<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\DescribeWorkspaceAuthentication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $editor
 * @property list<string>|null $admin
 */
class RoleValues extends Shape
{
    /**
     * @param array{
     *     editor?: list<string>|null,
     *     admin?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
