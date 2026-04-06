<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DeleteTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $ReadUnitsPerSecond
 * @property int<1, max>|null $WriteUnitsPerSecond
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'INACCESSIBLE_ENCRYPTION_CREDENTIALS'|'ARCHIVING'|'ARCHIVED'|'REPLICATION_NOT_AUTHORIZED'|null $Status
 */
class TableWarmThroughputDescription extends Shape
{
    /**
     * @param array{
     *     ReadUnitsPerSecond?: int<1, max>|null,
     *     WriteUnitsPerSecond?: int<1, max>|null,
     *     Status?: 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'INACCESSIBLE_ENCRYPTION_CREDENTIALS'|'ARCHIVING'|'ARCHIVED'|'REPLICATION_NOT_AUTHORIZED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
