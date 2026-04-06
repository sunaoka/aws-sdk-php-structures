<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\DeleteWorkloadEstimate;

trait DeleteWorkloadEstimateTrait
{
    /**
     * @param DeleteWorkloadEstimateRequest $args
     * @return DeleteWorkloadEstimateResponse
     */
    public function deleteWorkloadEstimate(DeleteWorkloadEstimateRequest $args)
    {
        $result = parent::deleteWorkloadEstimate($args->toArray());
        return new DeleteWorkloadEstimateResponse($result->toArray());
    }
}
