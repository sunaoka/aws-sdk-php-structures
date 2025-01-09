<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillEstimateInputCommitmentModifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $group
 * @property string $usageAccountId
 * @property BillScenarioCommitmentModificationAction $commitmentAction
 */
class BillEstimateInputCommitmentModificationSummary extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     group?: string,
     *     usageAccountId?: string,
     *     commitmentAction?: BillScenarioCommitmentModificationAction
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
