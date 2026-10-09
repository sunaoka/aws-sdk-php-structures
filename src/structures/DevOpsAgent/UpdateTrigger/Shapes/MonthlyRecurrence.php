<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateTrigger\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 31> $dayOfMonth
 */
class MonthlyRecurrence extends Shape
{
    /**
     * @param array{dayOfMonth: int<1, 31>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
