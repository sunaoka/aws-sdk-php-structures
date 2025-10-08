<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\CreateWorkspaceInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'disabled'|'default'|null $AutoRecovery
 */
class InstanceMaintenanceOptionsRequest extends Shape
{
    /**
     * @param array{AutoRecovery?: 'disabled'|'default'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
