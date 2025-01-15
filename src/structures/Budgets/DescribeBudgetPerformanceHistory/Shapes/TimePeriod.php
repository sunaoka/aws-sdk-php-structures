<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgetPerformanceHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $Start
 * @property \Aws\Api\DateTimeResult|null $End
 */
class TimePeriod extends Shape
{
    /**
     * @param array{
     *     Start?: \Aws\Api\DateTimeResult|null,
     *     End?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
