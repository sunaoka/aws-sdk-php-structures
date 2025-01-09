<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $Start
 * @property \Aws\Api\DateTimeResult $End
 */
class TimePeriod extends Shape
{
    /**
     * @param array{
     *     Start?: \Aws\Api\DateTimeResult,
     *     End?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
