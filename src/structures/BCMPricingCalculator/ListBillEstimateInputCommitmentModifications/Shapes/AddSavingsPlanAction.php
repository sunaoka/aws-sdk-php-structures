<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillEstimateInputCommitmentModifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $savingsPlanOfferingId
 * @property double $commitment
 */
class AddSavingsPlanAction extends Shape
{
    /**
     * @param array{
     *     savingsPlanOfferingId?: string,
     *     commitment?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
