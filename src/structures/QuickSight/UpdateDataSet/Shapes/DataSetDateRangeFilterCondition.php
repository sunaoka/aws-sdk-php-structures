<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataSetDateFilterValue|null $RangeMinimum
 * @property DataSetDateFilterValue|null $RangeMaximum
 * @property bool|null $IncludeMinimum
 * @property bool|null $IncludeMaximum
 */
class DataSetDateRangeFilterCondition extends Shape
{
    /**
     * @param array{
     *     RangeMinimum?: DataSetDateFilterValue|null,
     *     RangeMaximum?: DataSetDateFilterValue|null,
     *     IncludeMinimum?: bool|null,
     *     IncludeMaximum?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
