<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\GetWorkloadEstimate;

trait GetWorkloadEstimateTrait
{
    /**
     * @param GetWorkloadEstimateRequest $args
     * @return GetWorkloadEstimateResponse
     */
    public function getWorkloadEstimate(GetWorkloadEstimateRequest $args)
    {
        $result = parent::getWorkloadEstimate($args->toArray());
        return new GetWorkloadEstimateResponse($result->toArray());
    }
}
