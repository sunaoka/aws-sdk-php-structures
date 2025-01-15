<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NumericEqualityDrillDownFilter|null $NumericEqualityFilter
 * @property CategoryDrillDownFilter|null $CategoryFilter
 * @property TimeRangeDrillDownFilter|null $TimeRangeFilter
 */
class DrillDownFilter extends Shape
{
    /**
     * @param array{
     *     NumericEqualityFilter?: NumericEqualityDrillDownFilter|null,
     *     CategoryFilter?: CategoryDrillDownFilter|null,
     *     TimeRangeFilter?: TimeRangeDrillDownFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
