<?php

namespace Sunaoka\Aws\Structures\Keyspaces\GetTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $readUnitsPerSecond
 * @property int $writeUnitsPerSecond
 * @property 'AVAILABLE'|'UPDATING' $status
 */
class WarmThroughputSpecificationSummary extends Shape
{
    /**
     * @param array{
     *     readUnitsPerSecond: int,
     *     writeUnitsPerSecond: int,
     *     status: 'AVAILABLE'|'UPDATING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
