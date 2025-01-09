<?php

namespace Sunaoka\Aws\Structures\Glue\GetColumnStatisticsForPartition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $NumberOfTrues
 * @property int $NumberOfFalses
 * @property int $NumberOfNulls
 */
class BooleanColumnStatisticsData extends Shape
{
    /**
     * @param array{
     *     NumberOfTrues: int,
     *     NumberOfFalses: int,
     *     NumberOfNulls: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
