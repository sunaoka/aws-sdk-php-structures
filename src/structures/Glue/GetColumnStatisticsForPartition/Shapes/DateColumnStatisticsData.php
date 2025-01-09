<?php

namespace Sunaoka\Aws\Structures\Glue\GetColumnStatisticsForPartition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $MinimumValue
 * @property \Aws\Api\DateTimeResult $MaximumValue
 * @property int $NumberOfNulls
 * @property int $NumberOfDistinctValues
 */
class DateColumnStatisticsData extends Shape
{
    /**
     * @param array{
     *     MinimumValue?: \Aws\Api\DateTimeResult,
     *     MaximumValue?: \Aws\Api\DateTimeResult,
     *     NumberOfNulls: int,
     *     NumberOfDistinctValues: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
