<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateColumnStatisticsForTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DecimalNumber $MinimumValue
 * @property DecimalNumber $MaximumValue
 * @property int $NumberOfNulls
 * @property int $NumberOfDistinctValues
 */
class DecimalColumnStatisticsData extends Shape
{
    /**
     * @param array{
     *     MinimumValue?: DecimalNumber,
     *     MaximumValue?: DecimalNumber,
     *     NumberOfNulls: int,
     *     NumberOfDistinctValues: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
