<?php

namespace Sunaoka\Aws\Structures\Deadline\ListBudgets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $approximateDollarUsage
 */
class ConsumedUsages extends Shape
{
    /**
     * @param array{approximateDollarUsage: float} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
