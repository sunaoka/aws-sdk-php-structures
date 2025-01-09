<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WorkspaceId
 * @property string $Region
 * @property 'PENDING'|'AVAILABLE'|'IMPAIRED'|'UNHEALTHY'|'REBOOTING'|'STARTING'|'REBUILDING'|'RESTORING'|'MAINTENANCE'|'ADMIN_MAINTENANCE'|'TERMINATING'|'TERMINATED'|'SUSPENDED'|'UPDATING'|'STOPPING'|'STOPPED'|'ERROR' $State
 * @property 'PRIMARY'|'STANDBY' $Type
 */
class RelatedWorkspaceProperties extends Shape
{
    /**
     * @param array{
     *     WorkspaceId?: string,
     *     Region?: string,
     *     State?: 'PENDING'|'AVAILABLE'|'IMPAIRED'|'UNHEALTHY'|'REBOOTING'|'STARTING'|'REBUILDING'|'RESTORING'|'MAINTENANCE'|'ADMIN_MAINTENANCE'|'TERMINATING'|'TERMINATED'|'SUSPENDED'|'UPDATING'|'STOPPING'|'STOPPED'|'ERROR',
     *     Type?: 'PRIMARY'|'STANDBY'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
