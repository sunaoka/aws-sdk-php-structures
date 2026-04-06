<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillEstimateInputUsageModifications;

trait ListBillEstimateInputUsageModificationsTrait
{
    /**
     * @param ListBillEstimateInputUsageModificationsRequest $args
     * @return ListBillEstimateInputUsageModificationsResponse
     */
    public function listBillEstimateInputUsageModifications(ListBillEstimateInputUsageModificationsRequest $args)
    {
        $result = parent::listBillEstimateInputUsageModifications($args->toArray());
        return new ListBillEstimateInputUsageModificationsResponse($result->toArray());
    }
}
