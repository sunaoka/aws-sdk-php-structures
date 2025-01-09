<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateColumnStatisticsForTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaximumLength
 * @property double $AverageLength
 * @property int $NumberOfNulls
 * @property int $NumberOfDistinctValues
 */
class StringColumnStatisticsData extends Shape
{
    /**
     * @param array{
     *     MaximumLength: int,
     *     AverageLength: double,
     *     NumberOfNulls: int,
     *     NumberOfDistinctValues: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
