<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansUtilizationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NetSavings
 * @property string $OnDemandCostEquivalent
 */
class SavingsPlansSavings extends Shape
{
    /**
     * @param array{
     *     NetSavings?: string,
     *     OnDemandCostEquivalent?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
