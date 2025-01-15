<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansUtilizationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SavingsPlanArn
 * @property array<string, string>|null $Attributes
 * @property SavingsPlansUtilization|null $Utilization
 * @property SavingsPlansSavings|null $Savings
 * @property SavingsPlansAmortizedCommitment|null $AmortizedCommitment
 */
class SavingsPlansUtilizationDetail extends Shape
{
    /**
     * @param array{
     *     SavingsPlanArn?: string|null,
     *     Attributes?: array<string, string>|null,
     *     Utilization?: SavingsPlansUtilization|null,
     *     Savings?: SavingsPlansSavings|null,
     *     AmortizedCommitment?: SavingsPlansAmortizedCommitment|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
