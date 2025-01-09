<?php

namespace Sunaoka\Aws\Structures\Glue\GetColumnStatisticsForPartition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $NumberOfTrues
 * @property int<0, max> $NumberOfFalses
 * @property int<0, max> $NumberOfNulls
 */
class BooleanColumnStatisticsData extends Shape
{
    /**
     * @param array{
     *     NumberOfTrues: int<0, max>,
     *     NumberOfFalses: int<0, max>,
     *     NumberOfNulls: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
