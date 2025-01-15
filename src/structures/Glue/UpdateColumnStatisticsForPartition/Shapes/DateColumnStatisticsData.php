<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateColumnStatisticsForPartition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $MinimumValue
 * @property \Aws\Api\DateTimeResult|null $MaximumValue
 * @property int<0, max> $NumberOfNulls
 * @property int<0, max> $NumberOfDistinctValues
 */
class DateColumnStatisticsData extends Shape
{
    /**
     * @param array{
     *     MinimumValue?: \Aws\Api\DateTimeResult|null,
     *     MaximumValue?: \Aws\Api\DateTimeResult|null,
     *     NumberOfNulls: int<0, max>,
     *     NumberOfDistinctValues: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
