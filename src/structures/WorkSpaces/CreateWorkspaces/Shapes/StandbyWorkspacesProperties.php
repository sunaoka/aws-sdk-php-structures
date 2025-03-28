<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StandbyWorkspaceId
 * @property 'NO_REPLICATION'|'PRIMARY_AS_SOURCE'|null $DataReplication
 * @property \Aws\Api\DateTimeResult|null $RecoverySnapshotTime
 */
class StandbyWorkspacesProperties extends Shape
{
    /**
     * @param array{
     *     StandbyWorkspaceId?: string|null,
     *     DataReplication?: 'NO_REPLICATION'|'PRIMARY_AS_SOURCE'|null,
     *     RecoverySnapshotTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
