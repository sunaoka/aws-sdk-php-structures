<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateColumnStatisticsForTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $MinimumValue
 * @property \Aws\Api\DateTimeResult $MaximumValue
 * @property int<0, max> $NumberOfNulls
 * @property int<0, max> $NumberOfDistinctValues
 */
class DateColumnStatisticsData extends Shape
{
    /**
     * @param array{
     *     MinimumValue?: \Aws\Api\DateTimeResult,
     *     MaximumValue?: \Aws\Api\DateTimeResult,
     *     NumberOfNulls: int<0, max>,
     *     NumberOfDistinctValues: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
