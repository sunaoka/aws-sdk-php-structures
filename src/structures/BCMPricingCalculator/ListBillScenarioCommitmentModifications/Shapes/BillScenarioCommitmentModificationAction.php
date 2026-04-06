<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillScenarioCommitmentModifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AddReservedInstanceAction|null $addReservedInstanceAction
 * @property AddSavingsPlanAction|null $addSavingsPlanAction
 * @property NegateReservedInstanceAction|null $negateReservedInstanceAction
 * @property NegateSavingsPlanAction|null $negateSavingsPlanAction
 */
class BillScenarioCommitmentModificationAction extends Shape
{
    /**
     * @param array{
     *     addReservedInstanceAction?: AddReservedInstanceAction|null,
     *     addSavingsPlanAction?: AddSavingsPlanAction|null,
     *     negateReservedInstanceAction?: NegateReservedInstanceAction|null,
     *     negateSavingsPlanAction?: NegateSavingsPlanAction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
