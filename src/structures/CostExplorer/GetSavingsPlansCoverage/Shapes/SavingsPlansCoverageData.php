<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SpendCoveredBySavingsPlans
 * @property string $OnDemandCost
 * @property string $TotalCost
 * @property string $CoveragePercentage
 */
class SavingsPlansCoverageData extends Shape
{
    /**
     * @param array{
     *     SpendCoveredBySavingsPlans?: string,
     *     OnDemandCost?: string,
     *     TotalCost?: string,
     *     CoveragePercentage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
