<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillScenarioCommitmentModifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $reservedInstancesId
 */
class NegateReservedInstanceAction extends Shape
{
    /**
     * @param array{reservedInstancesId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
