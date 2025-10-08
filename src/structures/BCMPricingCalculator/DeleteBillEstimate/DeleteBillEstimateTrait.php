<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\DeleteBillEstimate;

trait DeleteBillEstimateTrait
{
    /**
     * @param DeleteBillEstimateRequest $args
     * @return DeleteBillEstimateResponse
     */
    public function deleteBillEstimate(DeleteBillEstimateRequest $args)
    {
        $result = parent::deleteBillEstimate($args->toArray());
        return new DeleteBillEstimateResponse($result->toArray());
    }
}
