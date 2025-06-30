<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeTableReplicaAutoScaling\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TableName
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'INACCESSIBLE_ENCRYPTION_CREDENTIALS'|'ARCHIVING'|'ARCHIVED'|'REPLICATION_NOT_AUTHORIZED'|null $TableStatus
 * @property list<ReplicaAutoScalingDescription>|null $Replicas
 */
class TableAutoScalingDescription extends Shape
{
    /**
     * @param array{
     *     TableName?: string|null,
     *     TableStatus?: 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'INACCESSIBLE_ENCRYPTION_CREDENTIALS'|'ARCHIVING'|'ARCHIVED'|'REPLICATION_NOT_AUTHORIZED'|null,
     *     Replicas?: list<ReplicaAutoScalingDescription>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
