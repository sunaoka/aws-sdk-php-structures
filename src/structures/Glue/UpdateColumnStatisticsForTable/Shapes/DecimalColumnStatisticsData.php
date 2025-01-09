<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateColumnStatisticsForTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DecimalNumber $MinimumValue
 * @property DecimalNumber $MaximumValue
 * @property int<0, max> $NumberOfNulls
 * @property int<0, max> $NumberOfDistinctValues
 */
class DecimalColumnStatisticsData extends Shape
{
    /**
     * @param array{
     *     MinimumValue?: DecimalNumber,
     *     MaximumValue?: DecimalNumber,
     *     NumberOfNulls: int<0, max>,
     *     NumberOfDistinctValues: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
