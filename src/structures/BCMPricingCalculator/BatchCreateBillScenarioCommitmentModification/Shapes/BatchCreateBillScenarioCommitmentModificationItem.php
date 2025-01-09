<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchCreateBillScenarioCommitmentModification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property string $id
 * @property string $group
 * @property string $usageAccountId
 * @property BillScenarioCommitmentModificationAction $commitmentAction
 */
class BatchCreateBillScenarioCommitmentModificationItem extends Shape
{
    /**
     * @param array{
     *     key?: string,
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
