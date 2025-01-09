<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillScenarioCommitmentModifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $usageAccountId
 * @property string $group
 * @property BillScenarioCommitmentModificationAction $commitmentAction
 */
class BillScenarioCommitmentModificationItem extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     usageAccountId?: string,
     *     group?: string,
     *     commitmentAction?: BillScenarioCommitmentModificationAction
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
