<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NO_REPLICATION'|'PRIMARY_AS_SOURCE'|null $DataReplication
 * @property \Aws\Api\DateTimeResult|null $RecoverySnapshotTime
 */
class DataReplicationSettings extends Shape
{
    /**
     * @param array{
     *     DataReplication?: 'NO_REPLICATION'|'PRIMARY_AS_SOURCE'|null,
     *     RecoverySnapshotTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
