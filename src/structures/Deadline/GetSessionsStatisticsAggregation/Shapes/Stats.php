<?php

namespace Sunaoka\Aws\Structures\Deadline\GetSessionsStatisticsAggregation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $min
 * @property double|null $max
 * @property double|null $avg
 * @property double|null $sum
 */
class Stats extends Shape
{
    /**
     * @param array{
     *     min?: double|null,
     *     max?: double|null,
     *     avg?: double|null,
     *     sum?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
