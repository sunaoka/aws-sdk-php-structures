<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ColumnIdentifier $SortBy
 * @property 'ASC'|'DESC' $Direction
 * @property AggregationFunction|null $AggregationFunction
 */
class ColumnSort extends Shape
{
    /**
     * @param array{
     *     SortBy: ColumnIdentifier,
     *     Direction: 'ASC'|'DESC',
     *     AggregationFunction?: AggregationFunction|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
