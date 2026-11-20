<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\GetUsageLinesEstimatedCost;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\GetUsageLinesEstimatedCostInput> $usage
 * @property 'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS'|'AFTER_DISCOUNTS_AND_COMMITMENTS' $rateType
 */
class GetUsageLinesEstimatedCostRequest extends Request
{
    /**
     * @param array{
     *     usage: list<Shapes\GetUsageLinesEstimatedCostInput>,
     *     rateType: 'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS'|'AFTER_DISCOUNTS_AND_COMMITMENTS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
