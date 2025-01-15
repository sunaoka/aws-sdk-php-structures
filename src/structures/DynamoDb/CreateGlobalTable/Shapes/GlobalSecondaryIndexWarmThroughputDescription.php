<?php

namespace Sunaoka\Aws\Structures\DynamoDb\CreateGlobalTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $ReadUnitsPerSecond
 * @property int<1, max>|null $WriteUnitsPerSecond
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|null $Status
 */
class GlobalSecondaryIndexWarmThroughputDescription extends Shape
{
    /**
     * @param array{
     *     ReadUnitsPerSecond?: int<1, max>|null,
     *     WriteUnitsPerSecond?: int<1, max>|null,
     *     Status?: 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
