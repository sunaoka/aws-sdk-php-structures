<?php

namespace Sunaoka\Aws\Structures\Iot\GetStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $count
 * @property double $average
 * @property double $sum
 * @property double $minimum
 * @property double $maximum
 * @property double $sumOfSquares
 * @property double $variance
 * @property double $stdDeviation
 */
class Statistics extends Shape
{
    /**
     * @param array{
     *     count?: int,
     *     average?: double,
     *     sum?: double,
     *     minimum?: double,
     *     maximum?: double,
     *     sumOfSquares?: double,
     *     variance?: double,
     *     stdDeviation?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
