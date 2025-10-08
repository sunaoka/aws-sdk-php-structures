<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCostAndUsageComparisons\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BaselineTimePeriodAmount
 * @property string|null $ComparisonTimePeriodAmount
 * @property string|null $Difference
 * @property string|null $Unit
 */
class ComparisonMetricValue extends Shape
{
    /**
     * @param array{
     *     BaselineTimePeriodAmount?: string|null,
     *     ComparisonTimePeriodAmount?: string|null,
     *     Difference?: string|null,
     *     Unit?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
