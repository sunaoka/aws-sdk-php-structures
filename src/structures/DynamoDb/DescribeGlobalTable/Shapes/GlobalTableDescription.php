<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeGlobalTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ReplicaDescription>|null $ReplicationGroup
 * @property string|null $GlobalTableArn
 * @property \Aws\Api\DateTimeResult|null $CreationDateTime
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'UPDATING'|null $GlobalTableStatus
 * @property string|null $GlobalTableName
 */
class GlobalTableDescription extends Shape
{
    /**
     * @param array{
     *     ReplicationGroup?: list<ReplicaDescription>|null,
     *     GlobalTableArn?: string|null,
     *     CreationDateTime?: \Aws\Api\DateTimeResult|null,
     *     GlobalTableStatus?: 'CREATING'|'ACTIVE'|'DELETING'|'UPDATING'|null,
     *     GlobalTableName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
