<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SpendCoveredBySavingsPlans
 * @property string|null $OnDemandCost
 * @property string|null $TotalCost
 * @property string|null $CoveragePercentage
 */
class SavingsPlansCoverageData extends Shape
{
    /**
     * @param array{
     *     SpendCoveredBySavingsPlans?: string|null,
     *     OnDemandCost?: string|null,
     *     TotalCost?: string|null,
     *     CoveragePercentage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
