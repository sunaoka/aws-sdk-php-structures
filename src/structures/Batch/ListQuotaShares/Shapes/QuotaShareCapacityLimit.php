<?php

namespace Sunaoka\Aws\Structures\Batch\ListQuotaShares\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $maxCapacity
 * @property string $capacityUnit
 */
class QuotaShareCapacityLimit extends Shape
{
    /**
     * @param array{
     *     maxCapacity: int,
     *     capacityUnit: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
