<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\CreateWorkloadEstimate;

trait CreateWorkloadEstimateTrait
{
    /**
     * @param CreateWorkloadEstimateRequest $args
     * @return CreateWorkloadEstimateResponse
     */
    public function createWorkloadEstimate(CreateWorkloadEstimateRequest $args)
    {
        $result = parent::createWorkloadEstimate($args->toArray());
        return new CreateWorkloadEstimateResponse($result->toArray());
    }
}
