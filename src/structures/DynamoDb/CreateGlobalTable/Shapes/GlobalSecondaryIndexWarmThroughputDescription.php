<?php

namespace Sunaoka\Aws\Structures\DynamoDb\CreateGlobalTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $ReadUnitsPerSecond
 * @property int<1, max> $WriteUnitsPerSecond
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE' $Status
 */
class GlobalSecondaryIndexWarmThroughputDescription extends Shape
{
    /**
     * @param array{
     *     ReadUnitsPerSecond?: int<1, max>,
     *     WriteUnitsPerSecond?: int<1, max>,
     *     Status?: 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
