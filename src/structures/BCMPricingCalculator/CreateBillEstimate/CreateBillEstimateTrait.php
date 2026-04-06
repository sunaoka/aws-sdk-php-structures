<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\CreateBillEstimate;

trait CreateBillEstimateTrait
{
    /**
     * @param CreateBillEstimateRequest $args
     * @return CreateBillEstimateResponse
     */
    public function createBillEstimate(CreateBillEstimateRequest $args)
    {
        $result = parent::createBillEstimate($args->toArray());
        return new CreateBillEstimateResponse($result->toArray());
    }
}
