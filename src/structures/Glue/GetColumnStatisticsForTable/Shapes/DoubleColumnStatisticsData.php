<?php

namespace Sunaoka\Aws\Structures\Glue\GetColumnStatisticsForTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $MinimumValue
 * @property double $MaximumValue
 * @property int $NumberOfNulls
 * @property int $NumberOfDistinctValues
 */
class DoubleColumnStatisticsData extends Shape
{
    /**
     * @param array{
     *     MinimumValue?: double,
     *     MaximumValue?: double,
     *     NumberOfNulls: int,
     *     NumberOfDistinctValues: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
