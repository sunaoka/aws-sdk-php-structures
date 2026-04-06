<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchUpdateBillScenarioCommitmentModification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $reservedInstancesOfferingId
 * @property int<1, max>|null $instanceCount
 */
class AddReservedInstanceAction extends Shape
{
    /**
     * @param array{
     *     reservedInstancesOfferingId?: string|null,
     *     instanceCount?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
