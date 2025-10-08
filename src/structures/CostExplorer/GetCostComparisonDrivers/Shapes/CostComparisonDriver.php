<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCostComparisonDrivers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Expression|null $CostSelector
 * @property array<string, ComparisonMetricValue>|null $Metrics
 * @property list<CostDriver>|null $CostDrivers
 */
class CostComparisonDriver extends Shape
{
    /**
     * @param array{
     *     CostSelector?: Expression|null,
     *     Metrics?: array<string, ComparisonMetricValue>|null,
     *     CostDrivers?: list<CostDriver>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
