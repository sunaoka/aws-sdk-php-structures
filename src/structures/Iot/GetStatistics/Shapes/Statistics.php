<?php

namespace Sunaoka\Aws\Structures\Iot\GetStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $count
 * @property double|null $average
 * @property double|null $sum
 * @property double|null $minimum
 * @property double|null $maximum
 * @property double|null $sumOfSquares
 * @property double|null $variance
 * @property double|null $stdDeviation
 */
class Statistics extends Shape
{
    /**
     * @param array{
     *     count?: int|null,
     *     average?: double|null,
     *     sum?: double|null,
     *     minimum?: double|null,
     *     maximum?: double|null,
     *     sumOfSquares?: double|null,
     *     variance?: double|null,
     *     stdDeviation?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
