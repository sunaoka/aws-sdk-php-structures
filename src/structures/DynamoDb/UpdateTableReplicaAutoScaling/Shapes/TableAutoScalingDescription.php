<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTableReplicaAutoScaling\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TableName
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'INACCESSIBLE_ENCRYPTION_CREDENTIALS'|'ARCHIVING'|'ARCHIVED' $TableStatus
 * @property list<ReplicaAutoScalingDescription> $Replicas
 */
class TableAutoScalingDescription extends Shape
{
    /**
     * @param array{
     *     TableName?: string,
     *     TableStatus?: 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'INACCESSIBLE_ENCRYPTION_CREDENTIALS'|'ARCHIVING'|'ARCHIVED',
     *     Replicas?: list<ReplicaAutoScalingDescription>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
