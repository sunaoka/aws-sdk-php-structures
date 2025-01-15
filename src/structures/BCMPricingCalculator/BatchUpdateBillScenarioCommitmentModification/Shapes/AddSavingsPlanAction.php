<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchUpdateBillScenarioCommitmentModification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $savingsPlanOfferingId
 * @property double|null $commitment
 */
class AddSavingsPlanAction extends Shape
{
    /**
     * @param array{
     *     savingsPlanOfferingId?: string|null,
     *     commitment?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
