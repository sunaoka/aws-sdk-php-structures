<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansUtilization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SavingsPlansUtilization $Utilization
 * @property SavingsPlansSavings $Savings
 * @property SavingsPlansAmortizedCommitment $AmortizedCommitment
 */
class SavingsPlansUtilizationAggregates extends Shape
{
    /**
     * @param array{
     *     Utilization: SavingsPlansUtilization,
     *     Savings?: SavingsPlansSavings,
     *     AmortizedCommitment?: SavingsPlansAmortizedCommitment
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
