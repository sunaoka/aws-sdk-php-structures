<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataSetNumericFilterValue|null $RangeMinimum
 * @property DataSetNumericFilterValue|null $RangeMaximum
 * @property bool|null $IncludeMinimum
 * @property bool|null $IncludeMaximum
 */
class DataSetNumericRangeFilterCondition extends Shape
{
    /**
     * @param array{
     *     RangeMinimum?: DataSetNumericFilterValue|null,
     *     RangeMaximum?: DataSetNumericFilterValue|null,
     *     IncludeMinimum?: bool|null,
     *     IncludeMaximum?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
