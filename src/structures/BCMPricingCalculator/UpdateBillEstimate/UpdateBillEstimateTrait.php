<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\UpdateBillEstimate;

trait UpdateBillEstimateTrait
{
    /**
     * @param UpdateBillEstimateRequest $args
     * @return UpdateBillEstimateResponse
     */
    public function updateBillEstimate(UpdateBillEstimateRequest $args)
    {
        $result = parent::updateBillEstimate($args->toArray());
        return new UpdateBillEstimateResponse($result->toArray());
    }
}
