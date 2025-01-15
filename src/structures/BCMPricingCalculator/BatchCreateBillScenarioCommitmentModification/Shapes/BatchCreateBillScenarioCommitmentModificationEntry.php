<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchCreateBillScenarioCommitmentModification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property string|null $group
 * @property string $usageAccountId
 * @property BillScenarioCommitmentModificationAction $commitmentAction
 */
class BatchCreateBillScenarioCommitmentModificationEntry extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     group?: string|null,
     *     usageAccountId: string,
     *     commitmentAction: BillScenarioCommitmentModificationAction
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
