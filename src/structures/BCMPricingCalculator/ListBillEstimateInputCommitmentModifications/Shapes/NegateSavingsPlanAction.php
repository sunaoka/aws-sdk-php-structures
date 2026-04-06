<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillEstimateInputCommitmentModifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $savingsPlanId
 */
class NegateSavingsPlanAction extends Shape
{
    /**
     * @param array{savingsPlanId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
