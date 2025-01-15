<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\UpdateWorkspaceAuthentication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $admin
 * @property list<string>|null $editor
 */
class RoleValues extends Shape
{
    /**
     * @param array{
     *     admin?: list<string>|null,
     *     editor?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
