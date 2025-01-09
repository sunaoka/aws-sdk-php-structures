<?php

namespace Sunaoka\Aws\Structures\CloudSearchDomain\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $min
 * @property string $max
 * @property int $count
 * @property int $missing
 * @property double $sum
 * @property double $sumOfSquares
 * @property string $mean
 * @property double $stddev
 */
class FieldStats extends Shape
{
    /**
     * @param array{
     *     min?: string,
     *     max?: string,
     *     count?: int,
     *     missing?: int,
     *     sum?: double,
     *     sumOfSquares?: double,
     *     mean?: string,
     *     stddev?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
