<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillEstimates;

trait ListBillEstimatesTrait
{
    /**
     * @param ListBillEstimatesRequest $args
     * @return ListBillEstimatesResponse
     */
    public function listBillEstimates(ListBillEstimatesRequest $args)
    {
        $result = parent::listBillEstimates($args->toArray());
        return new ListBillEstimatesResponse($result->toArray());
    }
}
