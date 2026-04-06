<?php

namespace Sunaoka\Aws\Structures\Deadline\GetSessionsStatisticsAggregation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $avg
 * @property double|null $max
 * @property double|null $min
 * @property double|null $sum
 */
class Stats extends Shape
{
    /**
     * @param array{
     *     avg?: double|null,
     *     max?: double|null,
     *     min?: double|null,
     *     sum?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
