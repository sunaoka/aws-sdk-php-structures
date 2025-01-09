<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\UpdateWorkspaceAuthentication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $admin
 * @property list<string> $editor
 */
class RoleValues extends Shape
{
    /**
     * @param array{
     *     admin?: list<string>,
     *     editor?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
