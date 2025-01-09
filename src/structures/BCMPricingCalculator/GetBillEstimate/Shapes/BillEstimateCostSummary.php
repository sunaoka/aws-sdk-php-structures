<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\GetBillEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CostDifference $totalCostDifference
 * @property array<string, CostDifference> $serviceCostDifferences
 */
class BillEstimateCostSummary extends Shape
{
    /**
     * @param array{
     *     totalCostDifference?: CostDifference,
     *     serviceCostDifferences?: array<string, CostDifference>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
