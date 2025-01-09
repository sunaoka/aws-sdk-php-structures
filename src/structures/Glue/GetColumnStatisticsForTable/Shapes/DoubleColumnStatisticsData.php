<?php

namespace Sunaoka\Aws\Structures\Glue\GetColumnStatisticsForTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $MinimumValue
 * @property double $MaximumValue
 * @property int<0, max> $NumberOfNulls
 * @property int<0, max> $NumberOfDistinctValues
 */
class DoubleColumnStatisticsData extends Shape
{
    /**
     * @param array{
     *     MinimumValue?: double,
     *     MaximumValue?: double,
     *     NumberOfNulls: int<0, max>,
     *     NumberOfDistinctValues: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
