<?php

namespace Sunaoka\Aws\Structures\Deadline\GetSessionsStatisticsAggregation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $min
 * @property double $max
 * @property double $avg
 * @property double $sum
 */
class Stats extends Shape
{
    /**
     * @param array{
     *     min?: double,
     *     max?: double,
     *     avg?: double,
     *     sum?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
