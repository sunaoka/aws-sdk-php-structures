<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCostAndUsageComparisons\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Expression|null $CostAndUsageSelector
 * @property array<string, ComparisonMetricValue>|null $Metrics
 */
class CostAndUsageComparison extends Shape
{
    /**
     * @param array{
     *     CostAndUsageSelector?: Expression|null,
     *     Metrics?: array<string, ComparisonMetricValue>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
