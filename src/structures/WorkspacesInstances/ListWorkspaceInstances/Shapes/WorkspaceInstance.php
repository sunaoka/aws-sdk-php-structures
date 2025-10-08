<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\ListWorkspaceInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALLOCATING'|'ALLOCATED'|'DEALLOCATING'|'DEALLOCATED'|'ERROR_ALLOCATING'|'ERROR_DEALLOCATING'|null $ProvisionState
 * @property string|null $WorkspaceInstanceId
 * @property EC2ManagedInstance|null $EC2ManagedInstance
 */
class WorkspaceInstance extends Shape
{
    /**
     * @param array{
     *     ProvisionState?: 'ALLOCATING'|'ALLOCATED'|'DEALLOCATING'|'DEALLOCATED'|'ERROR_ALLOCATING'|'ERROR_DEALLOCATING'|null,
     *     WorkspaceInstanceId?: string|null,
     *     EC2ManagedInstance?: EC2ManagedInstance|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
