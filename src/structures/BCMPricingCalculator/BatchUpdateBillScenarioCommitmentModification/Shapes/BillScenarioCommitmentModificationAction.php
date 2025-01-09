<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchUpdateBillScenarioCommitmentModification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AddReservedInstanceAction $addReservedInstanceAction
 * @property AddSavingsPlanAction $addSavingsPlanAction
 * @property NegateReservedInstanceAction $negateReservedInstanceAction
 * @property NegateSavingsPlanAction $negateSavingsPlanAction
 */
class BillScenarioCommitmentModificationAction extends Shape
{
    /**
     * @param array{
     *     addReservedInstanceAction?: AddReservedInstanceAction,
     *     addSavingsPlanAction?: AddSavingsPlanAction,
     *     negateReservedInstanceAction?: NegateReservedInstanceAction,
     *     negateSavingsPlanAction?: NegateSavingsPlanAction
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
