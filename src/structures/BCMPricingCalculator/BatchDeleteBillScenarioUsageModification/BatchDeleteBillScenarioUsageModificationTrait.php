<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchDeleteBillScenarioUsageModification;

trait BatchDeleteBillScenarioUsageModificationTrait
{
    /**
     * @param BatchDeleteBillScenarioUsageModificationRequest $args
     * @return BatchDeleteBillScenarioUsageModificationResponse
     */
    public function batchDeleteBillScenarioUsageModification(BatchDeleteBillScenarioUsageModificationRequest $args)
    {
        $result = parent::batchDeleteBillScenarioUsageModification($args->toArray());
        return new BatchDeleteBillScenarioUsageModificationResponse($result->toArray());
    }
}
