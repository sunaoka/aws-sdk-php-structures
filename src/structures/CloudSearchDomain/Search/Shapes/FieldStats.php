<?php

namespace Sunaoka\Aws\Structures\CloudSearchDomain\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $min
 * @property string|null $max
 * @property int|null $count
 * @property int|null $missing
 * @property double|null $sum
 * @property double|null $sumOfSquares
 * @property string|null $mean
 * @property double|null $stddev
 */
class FieldStats extends Shape
{
    /**
     * @param array{
     *     min?: string|null,
     *     max?: string|null,
     *     count?: int|null,
     *     missing?: int|null,
     *     sum?: double|null,
     *     sumOfSquares?: double|null,
     *     mean?: string|null,
     *     stddev?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
