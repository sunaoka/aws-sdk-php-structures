<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WorkspaceId
 * @property string|null $Region
 * @property 'PENDING'|'AVAILABLE'|'IMPAIRED'|'UNHEALTHY'|'REBOOTING'|'STARTING'|'REBUILDING'|'RESTORING'|'MAINTENANCE'|'ADMIN_MAINTENANCE'|'TERMINATING'|'TERMINATED'|'SUSPENDED'|'UPDATING'|'STOPPING'|'STOPPED'|'ERROR'|null $State
 * @property 'PRIMARY'|'STANDBY'|null $Type
 */
class RelatedWorkspaceProperties extends Shape
{
    /**
     * @param array{
     *     WorkspaceId?: string|null,
     *     Region?: string|null,
     *     State?: 'PENDING'|'AVAILABLE'|'IMPAIRED'|'UNHEALTHY'|'REBOOTING'|'STARTING'|'REBUILDING'|'RESTORING'|'MAINTENANCE'|'ADMIN_MAINTENANCE'|'TERMINATING'|'TERMINATED'|'SUSPENDED'|'UPDATING'|'STOPPING'|'STOPPED'|'ERROR'|null,
     *     Type?: 'PRIMARY'|'STANDBY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
