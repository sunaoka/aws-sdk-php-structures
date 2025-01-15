<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CategoryFilter|null $CategoryFilter
 * @property NumericRangeFilter|null $NumericRangeFilter
 * @property NumericEqualityFilter|null $NumericEqualityFilter
 * @property TimeEqualityFilter|null $TimeEqualityFilter
 * @property TimeRangeFilter|null $TimeRangeFilter
 * @property RelativeDatesFilter|null $RelativeDatesFilter
 * @property TopBottomFilter|null $TopBottomFilter
 * @property NestedFilter|null $NestedFilter
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     CategoryFilter?: CategoryFilter|null,
     *     NumericRangeFilter?: NumericRangeFilter|null,
     *     NumericEqualityFilter?: NumericEqualityFilter|null,
     *     TimeEqualityFilter?: TimeEqualityFilter|null,
     *     TimeRangeFilter?: TimeRangeFilter|null,
     *     RelativeDatesFilter?: RelativeDatesFilter|null,
     *     TopBottomFilter?: TopBottomFilter|null,
     *     NestedFilter?: NestedFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
