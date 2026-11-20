<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\GetUsageLinesEstimatedCost;

trait GetUsageLinesEstimatedCostTrait
{
    /**
     * @param GetUsageLinesEstimatedCostRequest $args
     * @return GetUsageLinesEstimatedCostResponse
     */
    public function getUsageLinesEstimatedCost(GetUsageLinesEstimatedCostRequest $args)
    {
        $result = parent::getUsageLinesEstimatedCost($args->toArray());
        return new GetUsageLinesEstimatedCostResponse($result->toArray());
    }
}
