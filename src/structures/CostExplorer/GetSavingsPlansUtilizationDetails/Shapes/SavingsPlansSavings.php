<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansUtilizationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NetSavings
 * @property string|null $OnDemandCostEquivalent
 */
class SavingsPlansSavings extends Shape
{
    /**
     * @param array{
     *     NetSavings?: string|null,
     *     OnDemandCostEquivalent?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
