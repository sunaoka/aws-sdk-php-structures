<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\UpdateWorkloadEstimate;

trait UpdateWorkloadEstimateTrait
{
    /**
     * @param UpdateWorkloadEstimateRequest $args
     * @return UpdateWorkloadEstimateResponse
     */
    public function updateWorkloadEstimate(UpdateWorkloadEstimateRequest $args)
    {
        $result = parent::updateWorkloadEstimate($args->toArray());
        return new UpdateWorkloadEstimateResponse($result->toArray());
    }
}
