<?php

namespace Sunaoka\Aws\Structures\Glue\GetColumnStatisticsForPartition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $MaximumLength
 * @property double $AverageLength
 * @property int<0, max> $NumberOfNulls
 */
class BinaryColumnStatisticsData extends Shape
{
    /**
     * @param array{
     *     MaximumLength: int<0, max>,
     *     AverageLength: double,
     *     NumberOfNulls: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
