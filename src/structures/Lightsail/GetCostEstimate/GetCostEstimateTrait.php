<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetCostEstimate;

trait GetCostEstimateTrait
{
    /**
     * @param GetCostEstimateRequest $args
     * @return GetCostEstimateResponse
     */
    public function getCostEstimate(GetCostEstimateRequest $args)
    {
        $result = parent::getCostEstimate($args->toArray());
        return new GetCostEstimateResponse($result->toArray());
    }
}
