<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListGlobalTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GlobalTableName
 * @property list<Replica>|null $ReplicationGroup
 */
class GlobalTable extends Shape
{
    /**
     * @param array{
     *     GlobalTableName?: string|null,
     *     ReplicationGroup?: list<Replica>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
