<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansUtilization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DateInterval $TimePeriod
 * @property SavingsPlansUtilization $Utilization
 * @property SavingsPlansSavings|null $Savings
 * @property SavingsPlansAmortizedCommitment|null $AmortizedCommitment
 */
class SavingsPlansUtilizationByTime extends Shape
{
    /**
     * @param array{
     *     TimePeriod: DateInterval,
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
