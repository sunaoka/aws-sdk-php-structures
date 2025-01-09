<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ColumnIdentifier $SortBy
 * @property 'ASC'|'DESC' $Direction
 * @property AggregationFunction $AggregationFunction
 */
class ColumnSort extends Shape
{
    /**
     * @param array{
     *     SortBy: ColumnIdentifier,
     *     Direction: 'ASC'|'DESC',
     *     AggregationFunction?: AggregationFunction
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
