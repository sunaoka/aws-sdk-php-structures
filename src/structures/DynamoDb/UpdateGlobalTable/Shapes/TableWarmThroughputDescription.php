<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateGlobalTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $ReadUnitsPerSecond
 * @property int<1, max> $WriteUnitsPerSecond
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'INACCESSIBLE_ENCRYPTION_CREDENTIALS'|'ARCHIVING'|'ARCHIVED' $Status
 */
class TableWarmThroughputDescription extends Shape
{
    /**
     * @param array{
     *     ReadUnitsPerSecond?: int<1, max>,
     *     WriteUnitsPerSecond?: int<1, max>,
     *     Status?: 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'INACCESSIBLE_ENCRYPTION_CREDENTIALS'|'ARCHIVING'|'ARCHIVED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
