<?php

namespace Sunaoka\Aws\Structures\Glue\GetColumnStatisticsForPartition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaximumLength
 * @property double $AverageLength
 * @property int $NumberOfNulls
 */
class BinaryColumnStatisticsData extends Shape
{
    /**
     * @param array{
     *     MaximumLength: int,
     *     AverageLength: double,
     *     NumberOfNulls: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
