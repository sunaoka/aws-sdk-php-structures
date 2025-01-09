<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ColumnIdentifier $Column
 * @property int $Limit
 * @property list<ColumnSort> $SortByMetrics
 */
class BodySectionDynamicCategoryDimensionConfiguration extends Shape
{
    /**
     * @param array{
     *     Column: ColumnIdentifier,
     *     Limit?: int,
     *     SortByMetrics?: list<ColumnSort>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
