<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ColumnIdentifier $Column
 * @property 'ASC'|'DESC' $SortDirection
 * @property AggregationFunction|null $AggregationFunction
 */
class AggregationSortConfiguration extends Shape
{
    /**
     * @param array{
     *     Column: ColumnIdentifier,
     *     SortDirection: 'ASC'|'DESC',
     *     AggregationFunction?: AggregationFunction|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
