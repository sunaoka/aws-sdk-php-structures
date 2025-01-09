<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchUpdateBillScenarioCommitmentModification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $savingsPlanId
 */
class NegateSavingsPlanAction extends Shape
{
    /**
     * @param array{savingsPlanId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
