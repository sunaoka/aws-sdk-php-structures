<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NumericEqualityDrillDownFilter $NumericEqualityFilter
 * @property CategoryDrillDownFilter $CategoryFilter
 * @property TimeRangeDrillDownFilter $TimeRangeFilter
 */
class DrillDownFilter extends Shape
{
    /**
     * @param array{
     *     NumericEqualityFilter?: NumericEqualityDrillDownFilter,
     *     CategoryFilter?: CategoryDrillDownFilter,
     *     TimeRangeFilter?: TimeRangeDrillDownFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
