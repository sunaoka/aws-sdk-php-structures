<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ColumnIdentifier $Column
 * @property int<1, 1000> $Limit
 * @property list<ColumnSort> $SortByMetrics
 */
class BodySectionDynamicNumericDimensionConfiguration extends Shape
{
    /**
     * @param array{
     *     Column: ColumnIdentifier,
     *     Limit?: int<1, 1000>,
     *     SortByMetrics?: list<ColumnSort>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
