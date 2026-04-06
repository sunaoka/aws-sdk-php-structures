<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillEstimateInputCommitmentModifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $group
 * @property string|null $usageAccountId
 * @property BillScenarioCommitmentModificationAction|null $commitmentAction
 */
class BillEstimateInputCommitmentModificationSummary extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     group?: string|null,
     *     usageAccountId?: string|null,
     *     commitmentAction?: BillScenarioCommitmentModificationAction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
