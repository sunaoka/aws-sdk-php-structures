<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillScenarioCommitmentModifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $reservedInstancesOfferingId
 * @property int<1, max> $instanceCount
 */
class AddReservedInstanceAction extends Shape
{
    /**
     * @param array{
     *     reservedInstancesOfferingId?: string,
     *     instanceCount?: int<1, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
