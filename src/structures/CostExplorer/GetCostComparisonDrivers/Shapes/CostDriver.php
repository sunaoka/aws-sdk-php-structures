<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCostComparisonDrivers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Type
 * @property string|null $Name
 * @property array<string, ComparisonMetricValue>|null $Metrics
 */
class CostDriver extends Shape
{
    /**
     * @param array{
     *     Type?: string|null,
     *     Name?: string|null,
     *     Metrics?: array<string, ComparisonMetricValue>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
