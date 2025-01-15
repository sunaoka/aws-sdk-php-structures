<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansUtilizationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SavingsPlansUtilization $Utilization
 * @property SavingsPlansSavings|null $Savings
 * @property SavingsPlansAmortizedCommitment|null $AmortizedCommitment
 */
class SavingsPlansUtilizationAggregates extends Shape
{
    /**
     * @param array{
     *     Utilization: SavingsPlansUtilization,
     *     Savings?: SavingsPlansSavings|null,
     *     AmortizedCommitment?: SavingsPlansAmortizedCommitment|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
