<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $gbPerMonthAllocated
 */
class MonthlyTransfer extends Shape
{
    /**
     * @param array{gbPerMonthAllocated?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
