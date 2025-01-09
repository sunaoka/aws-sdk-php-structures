<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Region
 * @property 'INSTANCE_REPLICATION_COMPLETE'|'INSTANCE_REPLICATION_IN_PROGRESS'|'INSTANCE_REPLICATION_FAILED'|'INSTANCE_REPLICA_DELETING'|'INSTANCE_REPLICATION_DELETION_FAILED'|'RESOURCE_REPLICATION_NOT_STARTED' $ReplicationStatus
 * @property string $ReplicationStatusReason
 */
class ReplicationStatusSummary extends Shape
{
    /**
     * @param array{
     *     Region?: string,
     *     ReplicationStatus?: 'INSTANCE_REPLICATION_COMPLETE'|'INSTANCE_REPLICATION_IN_PROGRESS'|'INSTANCE_REPLICATION_FAILED'|'INSTANCE_REPLICA_DELETING'|'INSTANCE_REPLICATION_DELETION_FAILED'|'RESOURCE_REPLICATION_NOT_STARTED',
     *     ReplicationStatusReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
