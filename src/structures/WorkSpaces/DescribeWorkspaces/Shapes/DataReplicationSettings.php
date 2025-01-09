<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NO_REPLICATION'|'PRIMARY_AS_SOURCE' $DataReplication
 * @property \Aws\Api\DateTimeResult $RecoverySnapshotTime
 */
class DataReplicationSettings extends Shape
{
    /**
     * @param array{
     *     DataReplication?: 'NO_REPLICATION'|'PRIMARY_AS_SOURCE',
     *     RecoverySnapshotTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
