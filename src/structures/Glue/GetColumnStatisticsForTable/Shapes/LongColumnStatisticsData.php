<?php

namespace Sunaoka\Aws\Structures\Glue\GetColumnStatisticsForTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MinimumValue
 * @property int $MaximumValue
 * @property int $NumberOfNulls
 * @property int $NumberOfDistinctValues
 */
class LongColumnStatisticsData extends Shape
{
    /**
     * @param array{
     *     MinimumValue?: int,
     *     MaximumValue?: int,
     *     NumberOfNulls: int,
     *     NumberOfDistinctValues: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
