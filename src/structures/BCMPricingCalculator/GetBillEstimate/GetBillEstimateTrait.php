<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\GetBillEstimate;

trait GetBillEstimateTrait
{
    /**
     * @param GetBillEstimateRequest $args
     * @return GetBillEstimateResponse
     */
    public function getBillEstimate(GetBillEstimateRequest $args)
    {
        $result = parent::getBillEstimate($args->toArray());
        return new GetBillEstimateResponse($result->toArray());
    }
}
