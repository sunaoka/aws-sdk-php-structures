<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\ListWorkspaceInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceId
 */
class EC2ManagedInstance extends Shape
{
    /**
     * @param array{InstanceId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
