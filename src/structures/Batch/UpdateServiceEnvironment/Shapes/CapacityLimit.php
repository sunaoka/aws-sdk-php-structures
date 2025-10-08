<?php

namespace Sunaoka\Aws\Structures\Batch\UpdateServiceEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $maxCapacity
 * @property string|null $capacityUnit
 */
class CapacityLimit extends Shape
{
    /**
     * @param array{
     *     maxCapacity?: int|null,
     *     capacityUnit?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
