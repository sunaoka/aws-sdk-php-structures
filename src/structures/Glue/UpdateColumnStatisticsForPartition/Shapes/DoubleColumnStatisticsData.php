<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateColumnStatisticsForPartition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $MinimumValue
 * @property double|null $MaximumValue
 * @property int<0, max> $NumberOfNulls
 * @property int<0, max> $NumberOfDistinctValues
 */
class DoubleColumnStatisticsData extends Shape
{
    /**
     * @param array{
     *     MinimumValue?: double|null,
     *     MaximumValue?: double|null,
     *     NumberOfNulls: int<0, max>,
     *     NumberOfDistinctValues: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
