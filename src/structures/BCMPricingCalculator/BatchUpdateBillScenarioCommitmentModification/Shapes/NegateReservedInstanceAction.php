<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchUpdateBillScenarioCommitmentModification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $reservedInstancesId
 */
class NegateReservedInstanceAction extends Shape
{
    /**
     * @param array{reservedInstancesId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
