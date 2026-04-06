<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\CreateBillEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CostDifference|null $totalCostDifference
 * @property array<string, CostDifference>|null $serviceCostDifferences
 */
class BillEstimateCostSummary extends Shape
{
    /**
     * @param array{
     *     totalCostDifference?: CostDifference|null,
     *     serviceCostDifferences?: array<string, CostDifference>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
