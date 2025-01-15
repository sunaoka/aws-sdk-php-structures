<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchUpdateBillScenarioCommitmentModification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $usageAccountId
 * @property string|null $group
 * @property BillScenarioCommitmentModificationAction|null $commitmentAction
 */
class BillScenarioCommitmentModificationItem extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     usageAccountId?: string|null,
     *     group?: string|null,
     *     commitmentAction?: BillScenarioCommitmentModificationAction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
