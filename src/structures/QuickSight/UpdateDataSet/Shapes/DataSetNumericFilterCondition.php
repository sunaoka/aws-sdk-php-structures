<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ColumnName
 * @property DataSetNumericComparisonFilterCondition|null $ComparisonFilterCondition
 * @property DataSetNumericRangeFilterCondition|null $RangeFilterCondition
 */
class DataSetNumericFilterCondition extends Shape
{
    /**
     * @param array{
     *     ColumnName?: string|null,
     *     ComparisonFilterCondition?: DataSetNumericComparisonFilterCondition|null,
     *     RangeFilterCondition?: DataSetNumericRangeFilterCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
