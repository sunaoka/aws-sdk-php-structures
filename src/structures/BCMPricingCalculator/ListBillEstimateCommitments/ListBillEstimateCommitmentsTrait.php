<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillEstimateCommitments;

trait ListBillEstimateCommitmentsTrait
{
    /**
     * @param ListBillEstimateCommitmentsRequest $args
     * @return ListBillEstimateCommitmentsResponse
     */
    public function listBillEstimateCommitments(ListBillEstimateCommitmentsRequest $args)
    {
        $result = parent::listBillEstimateCommitments($args->toArray());
        return new ListBillEstimateCommitmentsResponse($result->toArray());
    }
}
