<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillEstimateInputCommitmentModifications;

trait ListBillEstimateInputCommitmentModificationsTrait
{
    /**
     * @param ListBillEstimateInputCommitmentModificationsRequest $args
     * @return ListBillEstimateInputCommitmentModificationsResponse
     */
    public function listBillEstimateInputCommitmentModifications(ListBillEstimateInputCommitmentModificationsRequest $args)
    {
        $result = parent::listBillEstimateInputCommitmentModifications($args->toArray());
        return new ListBillEstimateInputCommitmentModificationsResponse($result->toArray());
    }
}
