<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CategoryFilter $CategoryFilter
 * @property NumericRangeFilter $NumericRangeFilter
 * @property NumericEqualityFilter $NumericEqualityFilter
 * @property TimeEqualityFilter $TimeEqualityFilter
 * @property TimeRangeFilter $TimeRangeFilter
 * @property RelativeDatesFilter $RelativeDatesFilter
 * @property TopBottomFilter $TopBottomFilter
 * @property NestedFilter $NestedFilter
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     CategoryFilter?: CategoryFilter,
     *     NumericRangeFilter?: NumericRangeFilter,
     *     NumericEqualityFilter?: NumericEqualityFilter,
     *     TimeEqualityFilter?: TimeEqualityFilter,
     *     TimeRangeFilter?: TimeRangeFilter,
     *     RelativeDatesFilter?: RelativeDatesFilter,
     *     TopBottomFilter?: TopBottomFilter,
     *     NestedFilter?: NestedFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
