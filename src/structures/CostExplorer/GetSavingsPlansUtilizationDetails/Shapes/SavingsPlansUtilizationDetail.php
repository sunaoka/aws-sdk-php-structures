<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansUtilizationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SavingsPlanArn
 * @property array<string, string> $Attributes
 * @property SavingsPlansUtilization $Utilization
 * @property SavingsPlansSavings $Savings
 * @property SavingsPlansAmortizedCommitment $AmortizedCommitment
 */
class SavingsPlansUtilizationDetail extends Shape
{
    /**
     * @param array{
     *     SavingsPlanArn?: string,
     *     Attributes?: array<string, string>,
     *     Utilization?: SavingsPlansUtilization,
     *     Savings?: SavingsPlansSavings,
     *     AmortizedCommitment?: SavingsPlansAmortizedCommitment
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
