<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateColumnStatisticsForPartition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DecimalNumber|null $MinimumValue
 * @property DecimalNumber|null $MaximumValue
 * @property int<0, max> $NumberOfNulls
 * @property int<0, max> $NumberOfDistinctValues
 */
class DecimalColumnStatisticsData extends Shape
{
    /**
     * @param array{
     *     MinimumValue?: DecimalNumber|null,
     *     MaximumValue?: DecimalNumber|null,
     *     NumberOfNulls: int<0, max>,
     *     NumberOfDistinctValues: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
