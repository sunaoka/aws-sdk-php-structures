<?php

namespace Sunaoka\Aws\Structures\DynamoDb\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ReadUnitsPerSecond
 * @property int $WriteUnitsPerSecond
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE' $Status
 */
class GlobalSecondaryIndexWarmThroughputDescription extends Shape
{
    /**
     * @param array{
     *     ReadUnitsPerSecond?: int,
     *     WriteUnitsPerSecond?: int,
     *     Status?: 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
