<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateStandbyWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UserName
 * @property string|null $DirectoryId
 * @property 'PENDING'|'AVAILABLE'|'IMPAIRED'|'UNHEALTHY'|'REBOOTING'|'STARTING'|'REBUILDING'|'RESTORING'|'MAINTENANCE'|'ADMIN_MAINTENANCE'|'TERMINATING'|'TERMINATED'|'SUSPENDED'|'UPDATING'|'STOPPING'|'STOPPED'|'ERROR'|null $State
 * @property string|null $WorkspaceId
 */
class PendingCreateStandbyWorkspacesRequest extends Shape
{
    /**
     * @param array{
     *     UserName?: string|null,
     *     DirectoryId?: string|null,
     *     State?: 'PENDING'|'AVAILABLE'|'IMPAIRED'|'UNHEALTHY'|'REBOOTING'|'STARTING'|'REBUILDING'|'RESTORING'|'MAINTENANCE'|'ADMIN_MAINTENANCE'|'TERMINATING'|'TERMINATED'|'SUSPENDED'|'UPDATING'|'STOPPING'|'STOPPED'|'ERROR'|null,
     *     WorkspaceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
