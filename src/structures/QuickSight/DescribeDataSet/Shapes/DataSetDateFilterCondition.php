<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ColumnName
 * @property DataSetDateComparisonFilterCondition|null $ComparisonFilterCondition
 * @property DataSetDateRangeFilterCondition|null $RangeFilterCondition
 */
class DataSetDateFilterCondition extends Shape
{
    /**
     * @param array{
     *     ColumnName?: string|null,
     *     ComparisonFilterCondition?: DataSetDateComparisonFilterCondition|null,
     *     RangeFilterCondition?: DataSetDateRangeFilterCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
