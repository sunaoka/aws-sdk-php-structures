<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ColumnIdentifier $Column
 * @property int<1, 1000>|null $Limit
 * @property list<ColumnSort>|null $SortByMetrics
 */
class BodySectionDynamicNumericDimensionConfiguration extends Shape
{
    /**
     * @param array{
     *     Column: ColumnIdentifier,
     *     Limit?: int<1, 1000>|null,
     *     SortByMetrics?: list<ColumnSort>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
