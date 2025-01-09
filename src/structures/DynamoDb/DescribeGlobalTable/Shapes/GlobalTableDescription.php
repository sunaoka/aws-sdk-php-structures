<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeGlobalTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ReplicaDescription> $ReplicationGroup
 * @property string $GlobalTableArn
 * @property \Aws\Api\DateTimeResult $CreationDateTime
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'UPDATING' $GlobalTableStatus
 * @property string $GlobalTableName
 */
class GlobalTableDescription extends Shape
{
    /**
     * @param array{
     *     ReplicationGroup?: list<ReplicaDescription>,
     *     GlobalTableArn?: string,
     *     CreationDateTime?: \Aws\Api\DateTimeResult,
     *     GlobalTableStatus?: 'CREATING'|'ACTIVE'|'DELETING'|'UPDATING',
     *     GlobalTableName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
