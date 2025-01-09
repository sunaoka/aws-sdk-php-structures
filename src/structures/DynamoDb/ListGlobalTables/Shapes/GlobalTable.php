<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListGlobalTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GlobalTableName
 * @property list<Replica> $ReplicationGroup
 */
class GlobalTable extends Shape
{
    /**
     * @param array{
     *     GlobalTableName?: string,
     *     ReplicationGroup?: list<Replica>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
